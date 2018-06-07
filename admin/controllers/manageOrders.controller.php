<?php

class manageOrders extends base_controller
{
    public function Index()
    {
        $this->initModel('manageOrders_model');

        $data['orders'] = $this->modelObj->getAllOrders();

        $this->reqView('manageOrders', $data['orders']);
    }
}