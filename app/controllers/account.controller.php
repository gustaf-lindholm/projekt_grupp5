<?php

class Account extends base_controller 
{

    public function index($fname = "", $lname = "")
    {
        echo "account index";

        //connects controller with the right model
        $this->initModel('Account_model');
        //var_dump($this->modelObj);

        $data = $this->modelObj->getPerson($fname, $lname);

        //connects controller with the right view
        $this->reqView('account',$data);

        
    }

}
