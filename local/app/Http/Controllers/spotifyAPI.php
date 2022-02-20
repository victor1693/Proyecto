<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class spotifyAPI extends Controller
{
   private $auth_token;
   private $spToken; 
   public $inputSearch;
   
   function __construct()  {
   		$this->auth_token = "ZmMwYzdjZTk5OTk1NDljMGE4YmU0NjQyY2YyNTE2NGQ6NjhkNmVjYTQ3M2E1NGNhZmEwOGY4YmFhMDU5YzQxNGE=";
   		$this->spToken = $this->getToken(); 
   }


   # OBETENEMOS EL TOKEN

   public function getToken()
   { 
		$curl = curl_init(); 
		curl_setopt_array($curl, array(
			CURLOPT_URL => 'https://accounts.spotify.com/api/token',
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => '',
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 0,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => 'POST',
			CURLOPT_POSTFIELDS => 'grant_type=client_credentials',
			CURLOPT_HTTPHEADER => array(
			'Authorization: Basic '.$this->auth_token,
			'Content-Type: application/x-www-form-urlencoded'
			),
		));

		$response = curl_exec($curl);  
		$httpcode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
		$response = json_decode($response);
		if($httpcode == "200"){ 
			return $response->access_token;   
		} 
   }


   # BUSCAMOS CANCIONES Y ARTISTAS EN SPOTIFY 
   public function searchTrackAndArtists()
   {	 
   		if($this->spToken == ""){
   			return response()->json(array('httpCode' => 400,'error' => "Error al obetenr el token"));
   		}

 		$url = 'https://api.spotify.com/v1/search?q='.$this->inputSearch.'&type=track&limit=15';
 		$url = str_replace(" ", "%20", $url);
 		$url = trim($url);
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
			'Accept: application/json',
			'Content-Type: application/json',
			'Authorization: Bearer ' . $this->spToken
		),
		));

		$response = curl_exec($curl);  
		$httpcode = curl_getinfo($curl, CURLINFO_HTTP_CODE); 
		return response()->json(json_decode($response),$httpcode); 
   }
}
