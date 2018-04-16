<?php

class Account extends base_controller 
{

    public function index($fname = "", $lname = "", $phone = "", $email = "") //here shall the users url be so this is completly wrong
    {
        //echo "account index";

        //connects controller with the right model
        $this->initModel('Account_model');
        //var_dump($this->modelObj);

        $data = $this->modelObj->getPerson($fname, $lname, $phone, $email);

        //connects controller with the right view
        $this->reqView('account',$data);

        
    }

}
