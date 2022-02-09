<?php
namespace App\Classes;
use App\Classes\SubscriptionException;

class Subscription{
    
    var $server;

    public function __construct($server){
        $this->server = $server; // Assign server url
    }

    public function subscribe($address, $password, $applicationId, $action, $version,$binary_header){

        $arrayField = array("applicationId" => $applicationId,
            "password" => $password,
            "subscriberId" => $address,
			"action" => $action);

        $jsonObjectFields = json_encode($arrayField);
        return $this->sendRequest($jsonObjectFields);
    }
	public function unSubscribe($address, $password, $applicationId, $action, $version,$binary_header){

        $arrayField = array("applicationId" => $applicationId,
            "password" => $password,
            "subscriberId" => $address,
            "sourceAddress" => $sourceAddress,
            "chargingAmount" => $charging_amount,
            "encoding" => $encoding,
            "version" => $version,
			"action" => $action,
            "binaryHeader" => $binary_header);

        $jsonObjectFields = json_encode($arrayField);
        return $this->sendRequest($jsonObjectFields);
    }

    private function sendRequest($jsonObjectFields){
        $ch = curl_init($this->server);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
        curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonObjectFields);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $res = curl_exec($ch);
        curl_close($ch);

        return $this->handleResponse($res);
    }

    private function handleResponse($resp){
        if ($resp == "") {
            throw new SubscriptionException
            ("Server URL is invalid", '500');
			
        } else {
            return $resp;
        }
    }

}


?>