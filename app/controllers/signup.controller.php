<?php

class Signup extends Base_controller
{

    public function index() {

        // kallar på rätt view
        $this->reqView('signup');
    }

    public function createNewAccount() {

    	// här kallar vi på vår model 
        $this->initModel('Signup_model');
        // här kallar vi på metoder i den instanserade modeln
        $this->modelObj->signupUser();
        //$this->reqView('login');
    }

    public function createUserFromOrder() {

    	// här kallar vi på vår model 
        $this->initModel('Signup_model');
        // här kallar vi på metoder i den instanserade modeln
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