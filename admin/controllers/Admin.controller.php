<?php

class Admin extends Base_controller
{
    
    public function Index()
    {
        
        $this->reqView('AdminPanel');
    }


    public function ProdOptions()
    {
        $this->initModel('ProdOptions_model');

        $this->modelObj->getOptions();

    }


}