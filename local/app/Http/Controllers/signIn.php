<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
class signIn extends Controller
{
    public function index()
    {
    	 $vista = View::make("signIn");
    	 return $vista;
    }

 	public function restore()
    {
    	 $vista = View::make("restorePassword");
    	 return $vista;
    }

    public function auth(Request $request)
    { 
    	if (!isset($_POST['email'])) {
    		return Redirect()->back()->with('info','Debe colocar su email.');
    	}
    	else if ($_POST['email'] == "") {
    		return Redirect()->back()->with('info','Debe colocar su email.');
    	}
    	else if (!isset($_POST['password'])) {
    		return Redirect()->back()->with('info','Debe colocar su password.');
    	}
    	else if ($_POST['password'] == "") {
    		return Redirect()->back()->with('info','Debe colocar su password.');
    	}

    	$data = array(
			'email' => $_POST['email'],
			'password' => $_POST['password'],
            'user_agent' => $request->header('user-agent'),
		); 
        
		$auth = json_decode(RQ::post("https://app.venbia.com/v1/auth",$data)); 
		 
		if($auth->httpCode != "200"){
			return Redirect()->back()->with('info',$auth->Error);
		}
		else if($auth->httpCode == "200" && $auth->total != "1"){ 
			return Redirect()->back()->with('info','La clave o correo invalid');
		}
		
		$customer = new customerInfo();  
		$customer->email = $auth->data[0]->email;
		$customer->name = $auth->data[0]->nombre . " " .$auth->data[0]->apellido;
		$customer->role = $auth->data[0]->role;
		$customer->ac_token = $auth->data[0]->ac_token;
		$customer->auth();
		return Redirect('dashboard');
    }

    public function restorePassword()
    { 
    	if (!isset($_POST['email'])) {
    		return Redirect()->back()->with('info','Debe colocar su email.');
    	}
    	else if ($_POST['email'] == "") {
    		return Redirect()->back()->with('info','Debe colocar su email.');
    	} 

    	$data = array(
			'email' => $_POST['email']
		); 

		$auth = json_decode(RQ::post("https://app.venbia.com/v1/restore",$data)); 
		 
		if($auth->httpCode != "200"){
			return Redirect()->back()->with('info',$auth->Error);
		} 
		return Redirect('signIn')->with('info','Su clave due enviada a su email.');
    }

    public function updatePassword()
    { 
        if (!isset($_POST['t1'])) {
            return Redirect()->back()->with('info','Es necesario que coloque un password.');
        }
        else if ($_POST['t1'] == "") {
            return Redirect()->back()->with('info','Es necesario que coloque un password');
        } 
        if (!isset($_POST['t2'])) {
            return Redirect()->back()->with('info','Es necesario que coloque un password');
        }
        else if ($_POST['t2'] == "") {
            return Redirect()->back()->with('info','Es necesario que coloque un password');
        } 
        else if ($_POST['t1'] != $_POST['t2']) {
            return Redirect()->back()->with('info','La password introducida no coincide');
        }
        else if (strlen($_POST['t1'])<8) {
            return Redirect()->back()->with('info','La password debe tener minimo 8 caracteres');
        }
        $data = array(
            'password' => $_POST['t1']
        ); 

        
        $auth = json_decode(RQ::post("https://app.venbia.com/v1/password",$data)); 
        
        if($auth->update_password->code != "200"){
            return Redirect()->back()->with('info',$auth->Error);
        } 
        return Redirect('security');
    }
}
