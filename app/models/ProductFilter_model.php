<?php

class ProductFilter_model extends Base_model
{
    
    public function getChosenCategory()
    {
        var_dump($_POST);
        //Variations must be added
        $this->sql = 
        "SELECT * FROM projekt_klon.product WHERE manufacturer = :brand";
        $manufacturer= $_POST['filter']['brand'];
        $paramBinds = [':brand' => $manufacturer];
        var_dump($_POST['filter']);
        $this->prepQuery($this->sql, $paramBinds);
        $this->getAll();
        return self::$data;
    }
}


