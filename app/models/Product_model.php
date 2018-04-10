<?php

class Product_Model extends Base_model
{

    // query the database for one product, pid(product id) and vid(variation id) is passed in the url
    public function getProduct($pid, $vid)
    {

        $this->sql = 
        "SELECT * FROM product_variants LEFT JOIN 
        product ON product.pid = product_variants.product_id WHERE product_id = :pid AND variant_id = :vid;";
        
        // $this->sql = "SELECT * FROM product_variants WHERE product_id = :pid AND variant_id = :vid;";
        // params to be bound, is sent to the prepQuery method
        $paramBinds = [':pid' => $pid, ':vid' => $vid];
        $base = new Base_model;
        
        $base->prepQuery($this->sql, $paramBinds);

        $base->getAll();

        //returns an array of the data from the database which is then printed to the client in the view
        return self::$data;
    }
}
