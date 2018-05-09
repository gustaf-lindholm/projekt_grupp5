<?php
class orderhistory extends base_controller 
{
    public function index($uid = "") //the users id url displays here 
    {
        //echo "account index";
        //connects controller with the right model
        $this->initModel('Orderhistory_model');
        //var_dump($this->modelObj);

        $uid = $_SESSION['loggedIn']['uid']; //
        
        $data = $this->modelObj->displayOrders($uid);
        //connects controller with the right view
        $this->reqView('orderhistory',$data);
        
    }
}