<?php

class Account extends base_controller 
{

    public function index($uid = "") //the users id url displays here 
    {
        //echo "account index";

        //connects controller with the right model
        $this->initModel('Account_model');
        //var_dump($this->modelObj);

        $uid = $_SESSION['loggedIn']; //gets session from Login_model

        $data = $this->modelObj->getPerson($uid);

        //connects controller with the right view
        $this->reqView('account',$data);

        
    }

}
