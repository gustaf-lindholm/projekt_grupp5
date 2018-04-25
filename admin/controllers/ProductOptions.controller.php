<?php

class ProductOptions extends Base_controller
{
    public function Index()
    {
        
        $this->initModel('ProdOptions_model');

        $data[0] = $this->modelObj->getProducts();

        $this->reqView('ProdOptions', $data);

    }

    public function getOptions()
    {
        $this->initModel('ProdOptions_model');

        $data[0] = $this->modelObj->getProducts();
        
        $data[1] = $this->modelObj->getOptions();

        $this->reqView('ProdOptions', $data);
    }
}
