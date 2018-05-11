<?php 

class ProductFilter extends Base_controller
{
    public function index()
    {
        // instansiate new model using the function built in from the Base Controller
        $this->initModel('productFilter_model');

        //We request modelObjs from the database
        $data = $this->modelObj->getChosenCategory();

        //This will be shown on our products page
        $this->reqView('Products', $data);

        
    }
}
