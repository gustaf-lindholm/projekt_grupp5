<?php

class manageProduct extends base_controller
{
    public function Index()
    {
        $this->initModel('ProdOptions_model');
        
        $data['products'] = $this->modelObj->getProducts();

        $this->reqView('manageProduct', $data);
    }

    public function viewProductVariants($pid)
    {

        $this->initModel('Variant_model');

        $data['variants'] = $this->modelObj->getSpecificProdVariants($pid);

        $this->initModel('ProdOptions_model');

        $data['product'] = $this->modelObj->getProduct($pid);

        Registry::setStatus(['editProduct' => 'edit']);

        $this->reqView('manageProduct', $data);
    }

    public function deleteVariant($vid, $pid)
    {
        $this->initModel('Variant_model');

        $this->modelObj->deleteVariant($vid, $pid);

        $this->viewProductVariants($pid);
    }

    public function editVariant($vid, $pid)
    {
        $this->initModel('Variant_model');

        $data = $this->modelObj->getSpecificProdVariant($vid, $pid);

        $this->reqView('editVariant', $data);
    }

}