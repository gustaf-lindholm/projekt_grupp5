<?php

class changepassword extends base_controller 
{

    public function index($uid = "") //the users id url displays here 
    {

        //connects controller with the right model
        $this->initModel('Changepassword_model');
        //var_dump($this->modelObj);

        $uid = $_SESSION['loggedIn']['uid']; //

        $data = $this->modelObj->getAccount($uid);

        //connects controller with the right view
        $this->reqView('changepassword',$data);

        
    }


}
