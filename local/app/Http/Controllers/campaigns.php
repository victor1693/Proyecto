<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
class campaigns extends Controller
{
    public function index()
    {
    	$vista = View::make("campaigns");
    	$vista->artistAside = $this->getArtistAside();
    	$vista->data = json_decode(RQ::get("https://app.venbia.com/v1/campaigns"));
    	$vista->aside = json_decode(RQ::get("https://app.venbia.com/v1/aside")); 
    	return $vista;
    }
}
