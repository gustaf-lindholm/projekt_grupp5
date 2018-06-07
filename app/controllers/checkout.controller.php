<?php

class Checkout extends Base_Controller
{
	
	public function index($uid = "") 
	{
		// instansiate new model using the function built in from the Base Controller
        $this->initModel('Checkout_model');
        
        $uid = $_SESSION['loggedIn']['uid'];

        //We instansiate cartItems method where we save the new array from session
        $data = $this->modelObj->getUser($uid);

        //This will be shown on our cart page
        $this->reqView('checkout', $data);
        
	}

    public function createNewAccount() {

    	// här kallar vi på vår model 
        $this->initModel('Signup_model');
        // här kallar vi på metoder i den instanserade modeln
        $this->modelObj->signupUser();
        //$this->reqView('login');
    }
    
}