<?php

class Signup extends Base_controller
{

    public function index() {

        // Render the correct view
        $this->reqView('signup');
    }

    public function createNewAccount() {

    	// instantiated model
        $this->initModel('Signup_model');
        // instantiated method
        $this->modelObj->signupUser();
        //$this->reqView('login');
    }

    public function createUserFromOrder() {

    	// instantiated model
        $this->initModel('Signup_model');
        // instantiated method
        $data = $this->modelObj->createUserFromOrder();
        
        // if createUserFromOrder is successful, continue with creating account
        if($data['status'] === true)
        {
            $this->modelObj->createAccountFromOrder($data['userId']);
        } else {
            echo "failed createUserFRomOrder";
            //Registry::setStatus(['userFromOrder' => false]);   
            //header('Location'.URLrewrite::BaseURL());
        }
        
    }
}