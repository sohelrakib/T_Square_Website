<?php

namespace App\Http\Controllers\Health;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

use App\Classes\Subscription;

use App\Models\User;
use App\Models\StepCounter;
use App\Models\ImportantNumber;
use App\Models\HealthTips;

use Validator;

class APIController extends BaseController
{
	public function getUid(Request $request){

        $validator = Validator::make($request->all(),[
                'msisdn'=> ['required','regex:/((018)|(016))[0-9]{8}/']
            ]);
        if ($validator->fails()) {
            return response()->json([
                        'status'=>'0',
                        'message'=>'Wrong Msisdn'
                    ]);
        }

        $msisdn = "88".$request->msisdn;
        $subscriber = User::where('msisdn',$msisdn)->where('app_name', 'tst_health')->first();
        if ($subscriber) {
            return response()->json([
                    'status'=>'1',
                    'message'=>'Found Record',
                    'results'=>['u_id'=>$subscriber->unique_id]
                ]);
        }else{
			$subscriber = new User;
			$subscriber->app_name = 'tst_health';
            $subscriber->msisdn = $msisdn;
            $subscriber->status = 'UNREGISTERED';
            $subscriber->channel = 'app';
           
            //$subscriber->app_id = \Config::get('constant.health.app_id');
            $subscriber->unique_id =  base_convert($msisdn, 10, 32);
            
            $subscriber->save();

            return response()->json([
                    'status'=>'1',
                    'message'=>'New Record Inserted',
                    'results'=>['u_id'=>$subscriber->unique_id]
                ]);
        }
	}

	public function subscription(Request $request){
        $validator = Validator::make($request->all(),[
                'unique_id'=> 'required'
            ]);
        if ($validator->fails()) {
            return response()->json([
                    'status'=>'0',
                    'message'=>'Parameter Missing'
                ]);
        }
        
        $subscriber = User::where('unique_id',$request->unique_id)->where('app_name', 'tst_health')->first();
        if ($subscriber) {
            $sub_resp = $this->getSubscriptionStatus('tel:'.$subscriber->msisdn);

            if(array_key_exists("subscriptionStatus", $sub_resp)){
                if($sub_resp['subscriptionStatus'] == 'REGISTERED'){
                    $subscriber->status = 'REGISTERED';
                    $subscriber->save();
                    return response()->json(
												[
													'status'=>'1',
													'message'=>'success',
													'results'=>'User is already subscribed'
												]
											);
                }elseif ($sub_resp['subscriptionStatus'] == 'PENDING CHARGE') {
                    $subscriber->status = 'PENDING CHARGE';
                    $subscriber->save();
                    return response()->json(
												[
													'status'=>'1',
													'message'=>'success',
													'results'=>'Pending Charge'
												]
											);
                }else{
                    $applicationId = \Config::get('constant.health.app_id');
                    $applicationPass = \Config::get('constant.health.app_pass');
                    $sub_resp = $this->subscribeUser($applicationId,$applicationPass,'tel:'.$subscriber->msisdn);
                    if(array_key_exists("subscriptionStatus", $sub_resp)){
                        $subscriber->status = $sub_resp['subscriptionStatus'];
                        $subscriber->save();
                        return response()->json(
													[
														'status'=>'1',
														'message'=>'success',
														'results'=>$sub_resp['subscriptionStatus']
													]
												);
                    }
                }
            }else{
				return response()->json(
					[
						'status'=>'0',
						'message'=>'Something went wrong!'
					]
				);
			}
        }else{
            return response()->json(
								[
									'status'=>'0',
									'message'=>'Invalid User'
								]
							);
        }
	}
	
	public function subscriptionCheck(Request $request){
		
		$validator = Validator::make($request->all(),[
			'unique_id'=> 'required'
		]);

		if ($validator->fails()) {
			return response()->json([
					'status'=>'0',
					'message'=>'Parameter Missing'
				]);
		}

        $unique_id = $request->unique_id;
        $user = User::where('unique_id','=',$unique_id)->where('app_name', 'tst_health')->orderBy('created_at', 'desc')->first();

        if (is_null($user)) {
            return response()->json(
                    [
                        'status'=>'0',
                        'message'=>'Invalid User'
                    ]
                );
        }

		$sub_resp = $this->getSubscriptionStatus('tel:'.$user->msisdn);
		// dd($sub_resp);
        if(array_key_exists("subscriptionStatus", $sub_resp)){

            if ($user->status == $sub_resp['subscriptionStatus']) {
                return response()->json(
                        [
                            'status'=>'1',
                            'message'=>'success',
                            'results'=>$sub_resp['subscriptionStatus']
                        ]
                    );
            }else{
                $user->status = $sub_resp['subscriptionStatus'];
                $user->save();
                return response()->json(
                        [
                            'status'=>'1',
                            'message'=>'success',
                            'results'=>$sub_resp['subscriptionStatus']
                        ]
                    );
            }
        }else{
            return response()->json(
                [
                    'status'=>'0',
                    'message'=>'Something went wrong!'
                ]
            );
        }
                         
	}
	
	public function unsubscription(Request $request){

		$validator = Validator::make($request->all(),[
			'unique_id'=> 'required'
		]);

		if ($validator->fails()) {
			return response()->json([
					'status'=>'0',
					'message'=>'Parameter Missing'
				]);
		}

        $unique_id = $request->unique_id;
        $user = User::where('unique_id','=',$unique_id)->where('app_name', 'tst_health')->first();
        if (is_null($user)) {
            return response()->json(
                    [
                        'status'=>'0',
                        'message'=>'Invalid User'
                    ]
                );
        }

		$res = $this->unsubscribeUser('tel:'.$user->msisdn);
		if(array_key_exists("subscriptionStatus", $res)){
			if ($res['subscriptionStatus']=='UNREGISTERED') {
				$user->status = 'UNREGISTERED';
				$user->save();
				return response()->json(
						[
							'status'=>'1',
							'message'=>'success',
							'results'=>'UNREGISTERED'
						]
					);
			}
		}else{
			return response()->json(
                [
                    'status'=>'0',
                    'message'=>'Something went wrong!'
                ]
            );
		}

	}
	
	public function getTips(Request $request){
		$tipsList = HealthTips::select('title', 'file_path')
								->where('status', 1)
								->get()->toArray();

		for($i=0; $i<count($tipsList); $i++){
			// $tipsList[$i]['file_path'] = url('/').'/'.$tipsList[$i]['file_path'];
			$tipsList[$i]['file_path'] = 'https://t-squaretech.co/public/'.$tipsList[$i]['file_path'];
		}
		
		if(empty($tipsList)){
			$response = [
							'status'=>'0',
							'message'=>'No Data'
						];
		}else{
			$response = [
							'status'=>'1',
							'message'=>'success',
							'detail'=>$tipsList
						];
		}

		return response()->json($response);
	}
	
	public function getNumbers(Request $request){
		$category = $request->category;
		$division_id = $request->division_id;
		
		if(isset($category) && isset($division_id)){
			$numberData = ImportantNumber::select('name', 'address', 'phone', 'email')
					->where('category', $category)		
					->where('division_id', $division_id)
					->where('status', 1)
					->get()->toArray();

			if(empty($numberData)){
				$response = [
								'status'=>'0',
								'message'=>'No Data'
							];
			}else{
				$response = [
								'status'=>'1',
								'message'=>'success',
								'detail'=>$numberData
							];
			}

		}else{
            $response = [
                            'status'=>'0',
                            'message'=>'Parameter Missing'
                        ];
        }

		return response()->json($response);
	}

	public function stepCounterStore(Request $request){
		$unique_id = $request->unique_id;
        $steps = $request->steps;
		$distance = $request->distance;
		$calories = $request->calories;
		$duration = $request->duration;

		if(isset($unique_id) && isset($steps) && isset($distance) && isset($calories) && isset($duration)){
			$profileDetails = User::where('unique_id', '=', $unique_id)->where('app_name', 'tst_health')
									->first();
									
			if(empty($profileDetails)){
				$response = [
								'status'=>'0',
								'message'=>"Invalid User"
							];
			}else{
				$counterData = new StepCounter;
				$counterData->user_id = $profileDetails->id;
				$counterData->steps = $steps;
				$counterData->distance = $distance;
				$counterData->calorie_burn = $calories;
				$counterData->duration = $duration;
				$counterData->save();

				$response = [
								'status'=>'1',
								'message'=>'success'
							];
			}
		}else{
            $response = [
                            'status'=>'0',
                            'message'=>'Parameter Missing'
                        ];
        }

		return response()->json($response);
	}

	public function stepCounterGet(Request $request){
		$unique_id = $request->unique_id;

		if(isset($unique_id)){
			$profileDetails = User::where('unique_id', '=', $unique_id)->where('app_name', 'tst_health')
									->first();

			if(empty($profileDetails)){
				$response = [
								'status'=>'0',
								'message'=>"Invalid User"
							];
			}else{
				$counterData = StepCounter::select('created_at as date', 'steps', 'distance', 'calorie_burn as calories', 'duration')
					->where('user_id', $profileDetails->id)
					->orderBy('created_at', 'DESC')
					->get()->toArray();

				for($i=0; $i<count($counterData); $i++){
					$counterData[$i]['date'] = date("d-M y", strtotime($counterData[$i]['date']));
				}

				$response = [
								'status'=>'1',
								'message'=>'success',
								'detail'=>$counterData
							];
			}
		}else{
			$response = [
				'status'=>'0',
				'message'=>'Parameter Missing'
			];
		}

		return response()->json($response);
	}

	private function getSubscriptionStatus($msisdn){

        $appId = \Config::get('constant.health.app_id');
        $app_pass = \Config::get('constant.health.app_pass');
        $url = "https://developer.bdapps.com/subscription/getstatus";
        $jsonStream = ['applicationId'=>$appId,'password'=>$app_pass,'subscriberId'=>$msisdn];
        $response = $this->sendRequest(json_encode($jsonStream),$url);

        return json_decode($response,true);

	}

	private function subscribeUser($appID,$appPass,$destinationAddress){   
    	
    	$subscriptionServer = "https://developer.bdapps.com/subscription/send";
    	$subscripSenderObj = new Subscription($subscriptionServer);
     	$applicationId = $appID;
    	$action = "1";
     	$encoding = "0";
     	$version =  "1.0";
        $password = $appPass;
        $binary_header = "";
        $res = $subscripSenderObj->subscribe($destinationAddress, $password, $applicationId, $action, $version, $binary_header);	
    	$responseArray = json_decode($res,true);

    	return $responseArray;
	}
	
	private function unsubscribeUser($destinationAddress){   
        
        $subscriptionServer = "https://developer.bdapps.com/subscription/send";
        $subscripSenderObj = new Subscription($subscriptionServer);
        $applicationId = \Config::get('constant.health.app_id');
        $action = "0";
        $encoding = "0";
        $version =  "1.0";
        $password = \Config::get('constant.health.app_pass');
        $binary_header = "";
        $res = $subscripSenderObj->subscribe($destinationAddress, $password, $applicationId, $action, $version, $binary_header);    
		$responseArray = json_decode($res,true);
		
        return $responseArray;
    }
	
	private function sendRequest($jsonStream,$url){

		$ch = curl_init($url);
		
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

    	curl_setopt($ch, CURLOPT_POST, 1);

    	curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));

    	curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonStream);

    	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    	$res = curl_exec($ch);

    	curl_close($ch);

		return $res;
		
	}

}
