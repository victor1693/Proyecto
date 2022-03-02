<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Stripe;

class stripeClass extends Controller
{	
	public $customer;
	public $monto;	
    public $email;
    private $privateKey; 

    function __construct()
     {
         $this->privateKey = "sk_test_51IcHMdLBCvwwtaP25ICF7loGqL9DcPwMKBAEQFTnl6PiGtkhqJLTbND3jxleJ3GB3qO89AXVI1XlC0bapXi7tY8700E3kbe8kW";
     } 

    public function PaymentIntent()
    { 
    	Stripe\Stripe::setApiKey($this->privateKey);
        $paymentIntent = Stripe\PaymentIntent::create ([
        		'amount' => $this->monto,
                'currency' => 'usd',
		        'customer' => session()->get('customer_id'), 
		        'automatic_payment_methods' => [
		            'enabled' => true,
		        ],
        ]);  
        $output = ['clientSecret' => $paymentIntent->client_secret];
	    return $output;
    }

    public function PaymentIntentVerify()
    {
    	if (!$_GET['payment_intent']) {
    		return Redirect()->back()->with('info','Es necesario que coloque el PI');
    	}
    	else if ($_GET['payment_intent'] == "") {
    		return Redirect()->back()->with('info','Es necesario que coloque el PI');
    	}
     
    	Stripe\Stripe::setApiKey($this->privateKey);
        $paymentIntent = Stripe\paymentIntent::retrieve ($_GET['payment_intent'],[]);
        
        if(!$paymentIntent->status == "succeeded"){
        	return Redirect()->back()->with('info','Ocurrio un error al procesar el pago.'); 
        }    

        # AQUI PROCESAMOS LA COMPRA CORRECTAMENTE
        return Redirect('dashboard');

	    return Response()->json($paymentIntent); 
    }

    public function createCustomer()
    {
    	Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        $customer = Stripe\customer::create (['email' => $this->email]);  
        return $customer->id; 
    }
}
