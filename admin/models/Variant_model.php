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
    
    // ALL variants for a specific product
    public function getSpecificProdVariants($pid)
    {
        $this->sql = "SELECT variant_id, product_id, sku, price FROM product_variants WHERE product_id = :pid";

        $paramBinds = [':pid' => $pid];
        $this->prepQuery($this->sql, $paramBinds);

        $data = $this->getAll();

        return $data;
    }

    // ONE specific variant
    public function getSpecificProdVariant($pid, $vid)
    {
        $this->sql = "SELECT variant_values.product_id, variant_values.variant_id, product.title, product.info, product.manufacturer,
        product_variants.price, group_concat(DISTINCT value_name order by option_values.option_id separator '/') 
        AS properties, product_variants.sku, product_variants.img_url 
        FROM projekt_klon.option_values
        INNER JOIN variant_values ON variant_values.value_id = option_values.value_id 
        INNER JOIN product ON product.pid = variant_values.product_id
        INNER JOIN product_variants ON product_variants.product_id = variant_values.product_id
        WHERE product_variants.variant_id = variant_values.variant_id 
        AND product_variants.product_id = :pid AND product_variants.variant_id = :vid";

        $paramBinds = [':pid' => $pid, ':vid' => $vid];
        $this->prepQuery($this->sql, $paramBinds);

        $data = $this->getOne();

        return $data;
    }

    public function deleteVariant($vid, $pid)
    {
        $this->sql = "DELETE FROM product_variants WHERE variant_id= :vid and`product_id`= :pid";

        $paramBinds = [":vid" => $vid, ':pid' => $pid];

        // set registry status on query execution
        $this->prepQuery($this->sql, $paramBinds) ? Registry::setStatus(['deleteVariant' => 'true']) : Registry::setStatus(['deleteVariant' => 'false']);
    }

    
}