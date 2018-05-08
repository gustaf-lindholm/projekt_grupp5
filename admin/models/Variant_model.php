<?php

class Variant_model extends Base_model
{
    public function addVariant()
    {
        $this->sql = 
        "INSERT INTO product_variants (product_id, sku, price, img_url)
        VALUES (:pid, :sku, :price, :img_url)";

        $paramBinds = [
            ':pid' => $_POST['addVariant']['product_id'],
            ':sku' => $_POST['addVariant']['sku'],
            ':price' => $_POST['addVariant']['price'],
            ':img_url' => $_POST['addVariant']['img_url'],
        ];

        if($this->prepQuery($this->sql, $paramBinds))
        {
            return true;
        } else {
            return false;
        }
    }

    public function getProdVariants()
    {
        $this->sql = "SELECT variant_id, product_id, sku, price FROM product_variants ORDER BY product_id";

        $this->prepQuery($this->sql);

        $data = $this->getAll();

        return $data;
    }

    
}