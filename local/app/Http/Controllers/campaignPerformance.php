<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
class campaignPerformance extends Controller
{
	public function index($token)
	{
		$vista = View::make("campaign-performance");
		$vista->artistAside = $this->getArtistAside(); 
		$vista->token = $token;
		$vista->data = json_decode(RQ::get("http://65.108.135.59/v1/campaign-performance/".$token));
		$vista->aside = json_decode(RQ::get("http://65.108.135.59/v1/aside")); 
		return $vista;
	}
}
