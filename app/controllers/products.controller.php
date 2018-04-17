<?php 

class Products extends Base_controller
{
    public function index()
    {
        // instansiate new model
        $this->initModel('Products_model');

        $data = $this->modelObj->getAllProducts();

        $this->reqView('Products', $data);

        
    }
}


