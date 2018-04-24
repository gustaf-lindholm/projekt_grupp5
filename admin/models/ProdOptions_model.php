<?php

class ProdOptions_model extends Base_model
{
    
    public function getOptions()
    {
        $this->sql = "SELECT * FROM product_options";

        $this->prepQuery($this->sql);

        $data = $this->getAll();

        return $data;
    }
}