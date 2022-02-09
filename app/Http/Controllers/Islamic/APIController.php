<?php

namespace App\Http\Controllers\Islamic;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

use App\Classes\Subscription;

use App\Models\User;
use App\Models\SuraList;
use App\Models\AyatList;
use App\Models\DuaList;
use App\Models\Hadith;

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
        $subscriber = User::where('msisdn',$msisdn)->where('app_name', 'tst_islamic')->first();
        if ($subscriber) {
            return response()->json([
                    'status'=>'1',
                    'message'=>'Found Record',
                    'results'=>['u_id'=>$subscriber->unique_id]
                ]);
        }else{
            $subscriber = new User;
            $subscriber->app_name = 'tst_islamic';
            $subscriber->msisdn = $msisdn;
            $subscriber->status = 'UNREGISTERED';
            $subscriber->channel = 'app';
           
            //$subscriber->app_id = \Config::get('constant.islamic.app_id');
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
        
        $subscriber = User::where('unique_id',$request->unique_id)->where('app_name', 'tst_islamic')->first();
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
                    $applicationId = \Config::get('constant.islamic.app_id');
                    $applicationPass = \Config::get('constant.islamic.app_pass');
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
        $user = User::where('unique_id','=',$unique_id)->where('app_name', 'tst_islamic')->orderBy('created_at', 'desc')->first();

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
        $user = User::where('unique_id','=',$unique_id)->where('app_name', 'tst_islamic')->first();
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
    
    public function suraList() {

    	$suraList = SuraList::select('id','sura_name')
    						->get()->toArray();
    	if(empty($suraList)){
	    		$response = [
		    					'status'=>'0',
		    					'message'=>'No Data'
							];
	    	}else{
				$response = [
		    					'status'=>'1',
		    					'message'=>'success',
		    					'detail'=>$suraList
							];
	    	}

        return response()->json($response);
    }

    public function suraView(Request $request) {
        $sura_id = $request->sura_id;
        if(isset($sura_id)){
            $ayatDetails = AyatList::where('sura_id', '=', $sura_id)
                                ->select('ayat_no','ayat','meaning')
                                ->get()->toArray();
    
            if(empty($ayatDetails)){
                    $response = [
                                    'status'=>'0',
                                    'message'=>'No Data'
                                ];
            }else{
                    $sura = SuraList::where('id', '=', $sura_id)
                                    ->first();
                    $response = [
                                    'status'=>'1',
                                    'message'=>'success',
                                    'sura_name'=>$sura->sura_name,
                                    'audio_path'=>$sura->audio_path,
                                    'detail'=>$ayatDetails
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

    public function duaList(){
		$duaList = DuaList::where('status', 1)
							->select('id','title')
							->orderBy('updated_at', 'desc')
							->get()->toArray();
							
    	if(empty($duaList)){
	    		$response = [
		    					'status'=>'0',
		    					'message'=>'No Data'
							];
	    	}else{
				$response = [
		    					'status'=>'1',
		    					'message'=>'success',
		    					'detail'=>$duaList
							];
	    	}

		 return response()->json($response);
    }

    public function duaView(Request $request){
        $dua_id = $request->dua_id;
        if(isset($dua_id)){
            $duaDetails = DuaList::where('id', '=', $dua_id)
                                ->select('title','dua','transliteration','meaning')
                                ->first();
    
            if(empty($duaDetails)){
    
            $response = [
                                'status'=>'0',
                                'message'=>'No Data'
                            ];
            }else{
    
                $response = [
                                'status'=>'1',
                                'message'=>'success',
                                'detail'=>$duaDetails
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

    public function getHadith(){
    	$hadithList = Hadith::where('status','=',1)
								->select('topic', 'hadith_ab', 'meaning')
								->get()->toArray();

		if(empty($hadithList)){
    		$response = [
	    					'status'=>'0',
	    					'message'=>'No Data'
						];
    	}else{
    		$response = [
	    					'status'=>'1',
	    					'message'=>'success',
	    					'detail'=>$hadithList
						];
    	}


    	return response()->json($response);
    }

    public function getHijriDate(){
		$today = date('d-m-Y');
		
		$url = 'http://api.aladhan.com/v1/gToH?adjustment=-1&date='.$today;
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
		$result = curl_exec($ch);
		curl_close($ch);

		$res = json_decode($result);

		$day = $res->data->hijri->day;
		$month = $res->data->hijri->month->en;
		$year = $res->data->hijri->year;

		$banglaMonth = $this->getBanglaMonth($month);
		$banglaDay = $this->getBanglaDigit($day);
		$banglaYear = $this->getBanglaDigit($year);

		$hijriDateBn = $banglaDay.' '.$banglaMonth.', '.$banglaYear.' হিজরি';


        $response = [
            'status'=>'1',
            'message'=>'success',
            'date'=>$hijriDateBn
        ];

		return response()->json($response);
    }
    
    public function getBanglaMonth($month){
		$hijriMonths = [
			"Muḥarram" => "মহররম",
			"Ṣafar" => "সফর",
			"Rabīʿ al-awwal" => "রবিউল আউয়াল",
			"Rabīʿ al-thānī" => "রবিউস সানি",
			"Jumādá al-ūlá" => "জমাদিউল আউয়াল",
			"Jumādá al-ākhirah" => "জমাদিউস সানি",
			"Rajab" => "রজব",
			"Shaʿbān" => "শাবান",
			"Ramaḍān" => "রমজান",
			"Shawwāl" => "শাওয়াল",
			"Dhū al-Qaʿdah" => "জ্বিলকদ",
			"Dhū al-Ḥijjah" => "জ্বিলহজ্জ"
		];

		return $hijriMonths[$month];
	}

	public function getBanglaDigit($str){
		$enDigit = array("0", "1", "2", "3", "4", "5", "6", "7", "8", "9");
		$bnDigit = array("০", "১", "২", "৩", "৪", "৫", "৬", "৭", "৮", "৯");

		$convStr = str_replace($enDigit, $bnDigit, $str);
		return $convStr;
	}

	private function getSubscriptionStatus($msisdn){

        $appId = \Config::get('constant.islamic.app_id');
        $app_pass = \Config::get('constant.islamic.app_pass');
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
        $applicationId = \Config::get('constant.islamic.app_id');
        $action = "0";
        $encoding = "0";
        $version =  "1.0";
        $password = \Config::get('constant.islamic.app_pass');
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
