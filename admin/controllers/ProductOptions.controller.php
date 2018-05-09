<?php

class ProductOptions extends Base_controller
{
    // default method that get all required data for forms
    public function Index()
    {
        $this->initModel('ProdOptions_model');
    
        // show all products in a <select>
        $data['products'] = $this->modelObj->getProducts();
        
        // get options for chosen product     
        $data['options'] = $this->modelObj->getOptions();

        // get all options available in option_type in DB
        $data['optionType'] = $this->modelObj->getOptionType();

        $this->reqView('ProdOptions', $data);
    }

    // add new option
    public function addOption()
    {
        // Instantiate model
        $this->initModel('ProdOptions_model');

        // Insert new option
        $this->modelObj->insertOption();

        // Redirect back to index method in this controller
        header('Location:'.URLrewrite::BaseAdminURL('productoptions'));

    }

    public function addProductOption()
    {
        $this->initModel('ProdOptions_model');

        if ($this->modelObj->insertProductOption())
        {
            // set a status for index method
            // using the Registry class
            Registry::setStatus(['addProdStatus' => 'success']);
            // Redirect back to index method in this controller
            $this->Index();
        } else {
            
            Registry::setStatus(['addProdStatus' => 'fail']);
            $this->Index();
            
        }
    
    }

    public function removeProductOption($pid = "", $product_id = "")
    {
        $this->initModel('ProdOptions_model');

        $this->modelObj->removeProductOption($pid, $product_id);

        $this->index();
    }

}
