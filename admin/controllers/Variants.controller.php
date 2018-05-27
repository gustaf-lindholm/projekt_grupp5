<?php

class Variants extends Base_controller
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
        $this->initModel('Variant_model');

        $data = $this->modelObj->getProdVariants();

        return $data;
    }

    // insert new variant
    public function newVariant()
    {
        $this->initModel('Variant_model');
        
        if($this->modelObj->addVariant())
        {

            $_POST['addVariant']['status'] = 'success';
            header('Location:'.URLrewrite::BaseAdminURL('variant'));
        } else {
            echo 'failed';
        }   
    }

    public function updateVariant()
    {
        $this->initModel('Variant_model');

        $this->modelObj->updateVariant();


    }

    public function addVariantValue()
    {
        $this->initModel('Variant_model');

        $this->modelObj->addVariantValue();
    }
}