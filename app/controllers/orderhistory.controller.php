<?php
class orderhistory extends base_controller 
{
    public function index($uid = "") //the users id url displays here 
    {
        //echo "account index";
        //connects controller with the right model
        $this->initModel('Orderhistory_model');

        $uid = $_SESSION['loggedIn'];
        //var_dump($this->modelObj);
        $data = $this->modelObj->displayOrders($uid);
        //connects controller with the right view
        $this->reqView('orderhistory',$data);
        
    }
}