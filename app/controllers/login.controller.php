<?php

/**
* 
*/
class Login extends Base_controller
{
	
	public function index() {

        // Call the model 
        $this->initModel('Login_model');
        // Call the method to instansiate
        $this->modelObj->login();
        // Render the correct view
        $this->reqView('login');
        
    }

    public function loginUser() {

        echo "log in user";
    }

    public function logout() {

        echo "logout user";
    }


}