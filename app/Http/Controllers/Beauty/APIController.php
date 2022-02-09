<?php

namespace App\Http\Controllers\Beauty;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

use App\Classes\Subscription;

use App\Models\User;
use App\Models\BeautyTips;

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
        $subscriber = User::where('msisdn',$msisdn)->where('app_name', 'tst_beauty')->first();
        if ($subscriber) {
            return response()->json([
                    'status'=>'1',
                    'message'=>'Found Record',
                    'results'=>['u_id'=>$subscriber->unique_id]
                ]);
        }else{
            $subscriber = new User;
            $subscriber->app_name = 'tst_beauty';
            $subscriber->msisdn = $msisdn;
            $subscriber->status = 'UNREGISTERED';
            $subscriber->channel = 'app';
           
            //$subscriber->app_id = \Config::get('constant.beauty.app_id');
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
        
        $subscriber = User::where('unique_id',$request->unique_id)->where('app_name', 'tst_beauty')->first();
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
                    $applicationId = \Config::get('constant.beauty.app_id');
                    $applicationPass = \Config::get('constant.beauty.app_pass');
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
        $user = User::where('unique_id','=',$unique_id)->where('app_name', 'tst_beauty')->orderBy('created_at', 'desc')->first();

        if (is_null($user)) {
            return response()->json(
                    [
                        'status'=>'0',
                        'message'=>'Invalid User'
                    ]
                );
        }

        $sub_resp = $this->getSubscriptionStatus('tel:'.$user->msisdn);
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
        $user = User::where('unique_id','=',$unique_id)->where('app_name', 'tst_beauty')->first();
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

    public function getCategories(){
        $categoryData = Category::select('id', 'title')
					->where('status', 1)
                    ->get()->toArray();
                    
        if(empty($categoryData)){
            $response = [
                            'status'=>'0',
                            'message'=>'No Data'
                        ];
        }else{
            $response = [
                            'status'=>'1',
                            'message'=>'success',
                            'detail'=>$categoryData
                        ];
        }

        return response()->json($response);
    }

    public function getJokes(Request $request){
        $category_id = $request->category_id;
        if(isset($category_id)){
            $jokeData = Joke::select('title', 'joke')
                        ->where('category_id', $category_id)
                        ->where('status', 1)
                        ->get()->toArray();

            if(empty($jokeData)){
                $response = [
                                'status'=>'0',
                                'message'=>'No Data'
                            ];
            }else{
                $response = [
                                'status'=>'1',
                                'message'=>'success',
                                'detail'=>$jokeData
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

    public function getTips(Request $request){
		$tipsList = BeautyTips::select('title', 'file_path')
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
	

	private function getSubscriptionStatus($msisdn){

        $appId = \Config::get('constant.beauty.app_id');
        $app_pass = \Config::get('constant.beauty.app_pass');
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
        $applicationId = \Config::get('constant.beauty.app_id');
        $action = "0";
        $encoding = "0";
        $version =  "1.0";
        $password = \Config::get('constant.beauty.app_pass');
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
