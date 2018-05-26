<?php

class Checkout extends Base_Controller
{
	
	public function index() 
	{
		// instansiate new model using the function built in from the Base Controller
        $this->initModel('Checkout_model');

        //We instansiate cartItems method where we save the new array from session
        $data = $this->modelObj->index();

        //This will be shown on our cart page
        $this->reqView('checkout', $data);
        
	}


}