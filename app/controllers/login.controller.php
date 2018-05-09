<?php

/**
* 
*/
class Login extends Base_controller
{
	
	public function index() {

        // Render the correct view
        $this->reqView('login');
        
    }

    public function loginUser() {

        // Call the model 
        $this->initModel('Login_model');
        // Call the method to instansiate
        $this->modelObj->login();
        $this->reqView('login');
    }

    public function logout() {

        echo "logout user";
    }


}