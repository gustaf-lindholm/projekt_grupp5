<?php

class Products_Model
{
    public function getProducts($pid)
    {
        $this->sql = 
        "SELECT * FROM projekt_klon.product";
        $stmt = $dbh->prepare($sql);
        $stmt->execute();
    
        //$base = new Base_model;
        //$base->prepQuery($this->sql, $paramBinds);

        $base->getAll();
        return self::$data;
    }
}
