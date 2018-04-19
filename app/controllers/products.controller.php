<?php 

class Products
{
    public function showProducts($pid = "")
    {
        $this->initModel('Products_model');
        // $pid and $vid is parameters in the url and sent to the model with the getProduct method.
        // The model is then responible for checking the parameters and query the database.
        // modelObj is the instance of the requested model
        $data = $this->modelObj->getProducts($pid);

    }
    
}