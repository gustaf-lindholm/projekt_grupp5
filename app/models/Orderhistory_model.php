<?php
class Orderhistory_model extends Base_model
{
    public function displayOrders($uid)
    {
        $this->sql = 
        "SELECT * FROM projekt_klon.orders WHERE projekt_klon.orders.user_id = :uid";
        $binds = [':uid' => $uid];
        $this->prepQuery($this->sql, $binds);
        $data = $this->getAll();
        return $data;
    }
}