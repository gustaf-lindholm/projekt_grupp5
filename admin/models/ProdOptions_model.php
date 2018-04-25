<?php

class ProdOptions_model extends Base_model
{
    public function getProducts()
    {
        $this->sql = "SELECT pid, title FROM product";

        $this->prepQuery($this->sql);

        $products = $this->getAll();

        return $products;
    }
    
    public function getOptions()
    {
        $this->sql = 
        "SELECT title, product_id, product_options.option_id, option_name FROM product_options
        JOIN projekt_klon.option_type ON 
        product_options.option_id = option_type.option_id
        JOIN product ON product_options.product_id = product.pid WHERE product_id = :pid ORDER BY product_id, option_id";

        $pid = $_POST['products'];
        $paramBinds = [':pid' => $pid];
        $this->prepQuery($this->sql, $paramBinds);

        $data = $this->getAll();

        return $data;
        unset($_POST['products']);
    }
}