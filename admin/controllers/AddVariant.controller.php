<?php

class AddVariant extends Base_controller
{
    public function Index()
    {
        
        // send all prods and variants to be printed
        $data['prodVariants'] = $this->getVariants();

        $this->reqView('addvariant', $data);

    }

    // get all products and respective variants
    public function getVariants()
    {
        $this->initModel('getProductVariants_model');

        $data = $this->modelObj->getProdVariants();

        return $data;
    }

    // insert new variant
    public function newVariant()
    {
        $this->initModel('AddVariant_model');
        
        if($this->modelObj->addVariant())
        {
            // att sätta $_POST här verkar inte ha någon inverkan...
            //$_POST['addVariant'] = [];
            $_POST['addVariant']['status'] = 'success';
            header('Location:'.URLrewrite::BaseAdminURL('addvariant'));
        } else {
            echo 'failed';
        }   
    }
}