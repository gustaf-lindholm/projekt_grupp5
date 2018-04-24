<?php

class AddVariant extends Base_controller
{
    public function Index()
    {
        $this->initModel('AddVariant_model');
        
        if($this->modelObj->addVariant())
        {
            $_POST['addVariant'] = [];
            $this->reqView('AdminPanel');
        } else {
            echo 'failed';
        }
        
        
    }
}