<?php 

<<<<<<< HEAD
class Products
{
    public function showProducts($pid = "")
    {
        $this->initModel('Products_model');
        // $pid and $vid is parameters in the url and sent to the model with the getProduct method.
        // The model is then responible for checking the parameters and query the database.
        // modelObj is the instance of the requested model
        $data = $this->modelObj->getProducts($pid);
=======
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

>>>>>>> 6235c2da92b2fb4f1e87fff8697fd43b7ccfc5d7

    }
    
}