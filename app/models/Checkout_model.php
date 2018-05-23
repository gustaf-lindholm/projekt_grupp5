<?php
class Checkout_model extends Base_model
{
    public function index() {

        $this->sql = 
        "SELECT * FROM projekt_klon.order JOIN product_variants ON projekt_klon.order.pid = product_variants.product_id 
        AND projekt_klon.order.variant_id = product_variants.variant_id WHERE projekt_klon.order.uid = :uid";
        $binds = [':uid' => $uid];
        $this->prepQuery($this->sql, $binds);
        $data = $this->getAll();
        return $data;
    }
}