<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
class customerInfo extends Controller
{

	public $email;
	public $name;
	public $role;
	public $ac_token;

	public function index()
	{
		$vista = View::make("public-customer-info"); 
		$vista->roles = json_decode(RQ::get("https://app.venbia.com/v1/roles"));  
		$vista->paises = json_decode(RQ::get("https://app.venbia.com/v1/paises")); 
		$vista->artistAside = $this->getArtistAside();  
		return $vista;
	}


	# CREAMOS UNA CUENTA NUEVA
	public function createAccount()
	{ 	
		# VALIDACIONES
		
		if(!isset($_POST['name'])){
			return Redirect()->back()->with('info','Debe colocar su nombre.');
		}
		else if($_POST['name'] == ""){
			return Redirect()->back()->with('info','Debe colocar su nombre.');
		}
		else if(!isset($_POST['apellido'])){
			return Redirect()->back()->with('info','Debe colocar su apellido.');
		}
		else if($_POST['apellido'] == ""){
			return Redirect()->back()->with('info','Debe colocar su apellido.');
		}
		else if(!isset($_POST['role'])){
			return Redirect()->back()->with('info','Debe colocar su role.');
		}
		else if($_POST['role'] == ""){
			return Redirect()->back()->with('info','Debe colocar su role.');
		}
		else if(!isset($_POST['pais'])){
			return Redirect()->back()->with('info','Debe colocar su pais.');
		}
		else if($_POST['pais'] == ""){
			return Redirect()->back()->with('info','Debe colocar su pais.');
		} 
		else if(!isset($_POST['correo'])){
			return Redirect()->back()->with('info','Debe colocar su correo.');
		}
		else if($_POST['correo'] == ""){
			return Redirect()->back()->with('info','Debe colocar su correo.');
		}
		else if(!isset($_POST['telefono'])){
			return Redirect()->back()->with('info','Debe colocar su telefono.');
		}
		else if($_POST['telefono'] == ""){
			return Redirect()->back()->with('info','Debe colocar su telefono.');
		}
		$data = array(
			'nombre' => $_POST['name'],
			'apellido' => $_POST['apellido'],
			'email' => $_POST['correo'],
			'telefono' => $_POST['telefono'],
			'pais' => $_POST['pais'],
			'role' => $_POST['role']
		);

		$account = json_decode(RQ::post("https://app.venbia.com/v1/user",$data)); 
	 
		if($account->httpCode == "201"){
			$this->email = $_POST['correo'];
			$this->name = $_POST['name'] . " " . $_POST['apellido'];
			$this->role = $_POST['role'];
			$this->ac_token = $account->data->ac_token;
			$this->auth(); 
			return Redirect('campaign-schedule');
		} 
		return Redirect()->back()->with('error',$account->Error); 
	} 
	
	# AUTH
	
	public function auth()
	{
		session()->put('email',$this->email);
		session()->put('name',$this->name);
		session()->put('role',$this->role);
		session()->put('ac_token',$this->ac_token);
	}

	# LOGOUT
	public function logOut()
	{
		session()->forget('email');
		session()->forget('name');
		session()->forget('role');
		session()->forget('ac_token'); 
		session()->flush();

		return Redirect('signIn');
	}
}
