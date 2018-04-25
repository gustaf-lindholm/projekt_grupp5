<?php

class ProductOptions extends Base_controller
{
    // default method that get all required data for forms
    public function Index()
    {
        $this->initModel('ProdOptions_model');
    
        // show all products in a <select>
        $data[0] = $this->modelObj->getProducts();
        
        // get options for chosen product     
        $data[1] = $this->modelObj->getOptions();

        // get all options available in option_type in DB
        $data[2] = $this->modelObj->getOptionType();
        

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

}
