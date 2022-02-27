<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
class campaignAnalitycs extends Controller
{
    public function index($token)
    {
    	$vista = View::make("campaign");
    	$vista->artistAside = $this->getArtistAside();
    	$vista->token = $token;
    	$vista->data = json_decode(RQ::get("https://app.venbia.com/v1/campaign-analysis/".$token));
    	$vista->aside = json_decode(RQ::get("https://app.venbia.com/v1/aside"));
    	return $vista;
    }
}
