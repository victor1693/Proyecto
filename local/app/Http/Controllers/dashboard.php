<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
class dashboard extends Controller
{
    public function index()
    {
    	$vista = View::make("dashboard");
    	$vista->artistAside = $this->getArtistAside(); 
    	$vista->data = json_decode(RQ::get("https://app.venbia.com/v1/dashboard"));
    	return $vista;
    }
}
