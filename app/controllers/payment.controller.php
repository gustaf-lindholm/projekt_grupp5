<?php
class Payment extends base_controller 
{
    public function index($uid = "") 
    {
        $this->initModel('Payment_model');

        $uid = $_SESSION['loggedIn']['uid'];
        
        $data['orderInfo'] = $this->modelObj->setOrders($uid);
        
        $this->reqView('payment',$data);
        
    }
}