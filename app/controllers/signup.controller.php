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
        $this->modelObj->createUserFromOrder();
        //$this->modelObj->createAccountFromOrder();
        //$this->reqView('login');
    }
}