<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class general extends Controller
{
    public function index()
    {
    	$vista = View::make("general");
    	$vista->artistAside = $this->getArtistAside();
    	$vista->data = json_decode(RQ::get("http://65.108.135.59/v1/general"));
        $vista->aside = json_decode(RQ::get("http://65.108.135.59/v1/aside"));    
    	return $vista;
    }

    public function accountUpdate(Request $request)
    {
    	if (!isset($_POST['name'])) {
            return Redirect()->back()->with('info','Debe colocar el name.');
        }
        else if ($_POST['name'] == "") {
            return Redirect()->back()->with('info','Debe colocar el name.');
        } 
        if (!isset($_POST['lastname'])) {
            return Redirect()->back()->with('info','Debe colocar el apellido.');
        }
        else if ($_POST['lastname'] == "") {
            return Redirect()->back()->with('info','Debe colocar el apellido.');
        }
        if (!isset($_POST['role'])) {
            return Redirect()->back()->with('info','Debe colocar el role.');
        }
        else if ($_POST['role'] == "") {
            return Redirect()->back()->with('info','Debe colocar el role.');
        } 
        if (!isset($_POST['country'])) {
            return Redirect()->back()->with('info','Debe colocar el country.');
        }
        else if ($_POST['country'] == "") {
            return Redirect()->back()->with('info','Debe colocar el country.');
        } 
        if (!isset($_POST['email'])) {
            return Redirect()->back()->with('info','Debe colocar el email.');
        }
        else if ($_POST['email'] == "") {
            return Redirect()->back()->with('info','Debe colocar el email.');
        } 
        if (!isset($_POST['phone'])) {
            return Redirect()->back()->with('info','Debe colocar el phone.');
        }
        else if ($_POST['phone'] == "") {
            return Redirect()->back()->with('info','Debe colocar el phone.');
        }  
        
        
        $img_name = Str::uuid()->toString();  
        $path = $request->file('img_profile')->store('profile_img');
        $url_img = explode("/", $path); 
         
        $data = array(
            'name' => $_POST['name'],
            'lastname' => $_POST['lastname'], 
            'email' => $_POST['email'],
            'role' => $_POST['role'],
            'country' => $_POST['country'],
            'phone' => $_POST['phone'],
            'img' => $url_img[1]
        );   
        $update = json_decode(RQ::post("http://65.108.135.59/v1/general",$data));
        if($update->code != "200"){
            return Redirect()->back()->with('info',"Ocurrio un error.");
        } 
        return Redirect('general');
    }
}
