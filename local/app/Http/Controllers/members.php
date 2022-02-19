<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
class members extends Controller
{
    public function index()
    {
    	$vista = View::make("members");
    	$vista->artistAside = $this->getArtistAside();  
    	return $vista;
    }
}
