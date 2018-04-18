<?php

class Signup extends Base_controller
{

    public function index() {

    	if (!isset($_POST['submit'])) {
    		header("Location: ../views/signup.view.php");
    		//$this->reqView('signup');
        } else {
        	//var_dump($_POST['submit']);
    	// här kallar vi på vår model 
    	$this->initModel('Signup_model');
    	// här kallar vi på metoder i den instanserade modeln
    	$this->modelObj->signup();
        }
    }

    public function newCompanyAccount() {

    	if (!isset($_POST['submit'])) {
    		header("Location: ../views/signup.view.php");
    		//$this->reqView('signup');
        } else {
        	//var_dump($_POST['submit']);
    	// här kallar vi på vår model 
    	$this->initModel('Signup_model');
    	// här kallar vi på metoder i den instanserade modeln
    	$this->modelObj->signup();
        }
    }

}