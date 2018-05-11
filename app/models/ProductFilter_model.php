<?php

class ProductFilter_model extends Base_model
{
    
    public function getChosenCategory()
    {
        var_dump($_POST);
        $this->sql = 
        "SELECT * FROM projekt_klon.product WHERE manufacturer = :brand";
        $manufacturer= $_POST['filter']['brand'];
        $paramBinds = [':brand' => $manufacturer];
        var_dump($_POST['filter']);
        $this->prepQuery($this->sql);
        $this->getAll();
        return self::$data;
    }
}


