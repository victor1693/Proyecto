<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
class billing extends Controller
{
    public function index()
    {
    	$vista = View::make("billing"); 
    	$vista->artistAside = $this->getArtistAside();
    	$vista->aside = json_decode(RQ::get("https://app.venbia.com/v1/aside")); 
    	return $vista;
    }
}
