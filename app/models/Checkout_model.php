<?php
class Checkout_model extends Base_model
{
    public function index() {
        $this->sql ="SELECT user.uid, user.level_id, user_levels.level_type, fname, lname, phone, username, creation_time, modification_time, password
        FROM projekt_klon.user JOIN account
        ON user.uid = account.uid JOIN user_levels
        ON user.level_id = user_levels.level_id";

        $this->prepQuery($this->sql);

        $this->getAll();

        return self::$data;
        // $this->sql = 
        // "SELECT * FROM projekt_klon.order JOIN product_variants ON projekt_klon.order.pid = product_variants.product_id 
        // AND projekt_klon.order.variant_id = product_variants.variant_id WHERE projekt_klon.order.uid = :uid";
        // $binds = [':uid' => $uid];
        // $this->prepQuery($this->sql, $binds);
        // $data = $this->getAll();
        // return $data;
    }

    public function getUser($uid) 
    {
        $this->sql = 
        "SELECT * FROM user WHERE user.uid = :uid"; 
        
        $paramBinds = [':uid' => $uid];
        $base = new Base_model;
        
        $base->prepQuery($this->sql, $paramBinds);
        $base->getAll();
        return self::$data;
    }

    public function getAllUsers()
    {
        $this->sql ="SELECT user.uid, user.level_id, user_levels.level_type, fname, lname, phone, username, creation_time, modification_time, password
        FROM projekt_klon.user JOIN account
        ON user.uid = account.uid JOIN user_levels
        ON user.level_id = user_levels.level_id";

        $this->prepQuery($this->sql);

        $this->getAll();

        return self::$data;
    }
}
