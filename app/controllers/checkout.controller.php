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

        $this->initModel('Checkout_model');
    
        $this->modelObj->CreateUser();
    
    }

<<<<<<< HEAD
    public function order()
    {
        $this->initModel('Checkout_model');
        
        $this->modelObj->placeOrder();

        $data = $this->modelObj->index();
        $this->reqView('checkout', $data);
    }

=======
    public function placeOrder() {
        
        $this->initModel('Checkout_model');
>>>>>>> 078903cd34e79b1a8bb41baea787e94c73ad62b0
    
        $this->modelObj->placeOrder();
    }
    
}