<?php
// get all products and their variants from DB
class getProductVariants_model extends Base_model
{
    public function getProdVariants()
    {
        $this->sql = "SELECT variant_id, product_id, sku, price FROM product_variants ORDER BY product_id";

        $this->prepQuery($this->sql);

        $data = $this->getAll();

        return $data;
    }
}