<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RQ extends Controller
{
    # REQUESTS DE TIPO GET
    
    public static function get($url)
    {
    	 
    	$curl = curl_init(); 
		curl_setopt_array($curl, array(
			CURLOPT_URL => $url,
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => '',
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 0,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => 'GET', 
			CURLOPT_HTTPHEADER => array(
				'Authorization: ' . session()->get('ac_token'),
			),
		));

		$response = curl_exec($curl);  
		$httpcode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
		if($httpcode!="200"){
			return response()->json(array('httpCode' => $httpcode, 'data' => [], "Error" => "Error " . $httpcode),$httpcode); 
		} 
		return $response; 

    } 

    # REQUESTS DE TIPO POST
    public static function post($url,$data,$file=false)
    {
    	
		$curl = curl_init();

		curl_setopt_array($curl, array(
		  CURLOPT_URL => $url,
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => '',
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 0,
		  CURLOPT_FOLLOWLOCATION => true,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => 'POST',
		  CURLOPT_POSTFIELDS => $data,
		  CURLOPT_HTTPHEADER => array(
		  	'Authorization: ' . session()->get('ac_token'),
		  ),
		)); 

		$response = curl_exec($curl);  
		$httpcode = curl_getinfo($curl, CURLINFO_HTTP_CODE);  
		return $response;  
    }
    # REQUESTS DE TIPO PUT
    # REQUESTS DE TIPO DELETE
}
