<?php

class manageProduct extends base_controller
{
    public function Index()
    {
        $this->initModel('ProdOptions_model');
        
        $data['products'] = $this->modelObj->getProducts();

        //$this->initModel('editProduct_model');

        $this->reqView('manageProduct', $data);
    }
}