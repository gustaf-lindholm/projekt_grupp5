<?php

class Checkout extends Base_Controller
{
	
	public function index() 
	{
		// instansiate new model using the function built in from the Base Controller
        $this->initModel('Checkout_model');
        

        if (isset($_SESSION['loggedIn'])) {

            $uid = $_SESSION['loggedIn']['uid'];
            $data['userInfo'] = $this->modelObj->index($uid);
            $this->reqView('checkout', $data);

        } else {

            $this->reqView('checkout');
        }

    }
    
    public function tempCustomerUserInfo()
    {
        $this->initModel('Checkout_model');
        // save submitted info in session
        $this->modelObj->tempCustomerUserInfo();

        $this->index();

    }
    public function tempCustomerAccountInfo()
    {
        $this->initModel('Checkout_model');
        // save submitted info in session
        $this->modelObj->tempCustomerAccountInfo();

        $this->index();

    }
    
    public function tempPaymentMethod()
    {
        $this->initModel('Checkout_model');
        // save submitted info in session
        $this->modelObj->tempPaymentMethod();

        $this->index();

    }

    public function createNewAccount() {

        $this->initModel('Checkout_model');
    
        $this->modelObj->CreateUser();
    
    }

    public function order()
    {
        $this->initModel('Checkout_model');
        
        $this->modelObj->placeOrder();

        $data = $this->modelObj->index();
        $this->reqView('checkout', $data);
    }

    public function placeOrder() {
        
        $this->initModel('Checkout_model');
    
        $this->modelObj->placeOrder();

        //$this->reqView('checkoutConfirm');
    }
    
}