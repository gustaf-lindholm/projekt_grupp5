<?php

class OptionType extends Base_controller
{
    public function Index()
    {
        $this->initModel('OptionType_model');
    
        $this->reqView('optionType');
    
    }


}