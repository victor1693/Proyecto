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
    # CREAR UN CUSTOMER ID PARA STRIPE
    # CREAMOS UN PAYMENT INTENT
    # VERIFICAMOS UN PAGO   
 

    public function PaymentIntent()
    { 
    	Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
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

    	Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
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
