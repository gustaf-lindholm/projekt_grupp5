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
<<<<<<< HEAD
        
=======
        //$this->reqView('login');
>>>>>>> 4590e9485c73b31237b5aca953274cfb5def305e
    }
}