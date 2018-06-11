<?php

class manageOrders extends base_controller
{
    public function Index()
    {
        $this->initModel('manageOrders_model');

        $data['orders'] = $this->modelObj->getAllOrders();

        $this->reqView('manageOrders', $data);
    }

    public function orderDetails($oid)
    {
        $this->initModel('manageOrders_model');

        $data['order_items'] = $this->modelObj->getOrderItems($oid);

        $this->reqView('manageOrders', $data);
    }
}