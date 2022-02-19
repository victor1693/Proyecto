<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
class notifications extends Controller
{
    public function index()
    {
    	$vista = View::make("notifications");
    	$vista->artistAside = $this->getArtistAside();  
    	return $vista;
    }
}
