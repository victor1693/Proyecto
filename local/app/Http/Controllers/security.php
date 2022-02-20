<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
class security extends Controller
{
     public function index()
    {
    	$vista = View::make("security");
    	$vista->artistAside = $this->getArtistAside();  
    	return $vista;
    }
}
