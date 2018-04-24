<?php

class OptionType extends Base_controller
{
    public function Index()
    {
        $this->initModel('OptionType_model');

        $data = $this->modelObj->getOptions();
    
        $this->reqView('optionType', $data);
    
    }

    public function addOption()
    {

        $this->initModel('OptionType_model');

        $this->modelObj->insertOption();

        $this->reqView('optiontype');



    }


}