<?php

class ProdOptions_model extends Base_model
{
    
    public function getOptions()
    {
        $this->sql = "SELECT * FROM option_type";

        $this->prepQuery($this->sql);

        $data = $this->getAll();
    }
}