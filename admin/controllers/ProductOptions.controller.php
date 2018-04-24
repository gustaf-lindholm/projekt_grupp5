<?php

class ProductOptions extends Base_controller
{
    public function Index()
    {
        
        $this->initModel('ProdOptions_model');

        $data = $this->modelObj->getOptions();

        $this->reqView('ProdOptions', $data);

    }
}
