<?php

class ProductFilter_model extends Base_model
{
    
    public function getChosenCategory()
    {
        //Variations must be added
        $this->sql = 
        "SELECT variant_values.product_id, variant_values.variant_id, product.title, product.info, product.manufacturer,
        product_variants.price, group_concat(DISTINCT value_name order by option_values.option_id separator '/') AS properties, product_variants.sku, product_variants.img_url 
        FROM projekt_klon.option_values
        INNER JOIN variant_values ON variant_values.value_id = option_values.value_id 
        INNER JOIN product ON product.pid = variant_values.product_id
        INNER JOIN product_variants ON product_variants.product_id = variant_values.product_id
        WHERE manufacturer = :brand";
       
        $manufacturer = $_POST['manufacturer'];
        $paramBinds = [':brand' => $manufacturer];
        $this->prepQuery($this->sql, $paramBinds);
        $data = $this->getAll();
        return $data;
    }

    public function getBrands() {
        $this->sql = "SELECT distinct manufacturer FROM product";

        $this->prepQuery($this->sql);

        $data = $this->getAll();

        return $data;
    }

    public function getProductVariants() {
        $this->sql = 
        "SELECT product.info, pid, cid, variant_values.variant_id, option_values.option_id, 
        group_concat(value_name separator '/') AS property, title, manufacturer, price, img_url, sku
        FROM projekt_klon.variant_values
        JOIN option_values ON variant_values.value_id = option_values.value_id
        JOIN product ON variant_values.product_id = product.pid
        JOIN product_variants ON product_variants.product_id = variant_values.product_id
        WHERE variant_values.product_id = product.pid AND variant_values.variant_id = product.vid
        AND product_variants.product_id = product.pid AND product_variants.variant_id = product.vid";

        $this->prepQuery($this->sql);

        $data = $this->getAll();

        return $data;
    }
}


