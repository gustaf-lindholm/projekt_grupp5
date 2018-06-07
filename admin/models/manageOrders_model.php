<?php

class manageOrders_model extends base_model
{
    public function getAllOrders()
    {
        $this->sql = "SELECT * FROM projekt_klon.order";

        $this->prepQuery($this->sql);

        $this->getAll();

        return self::$data;
    }
}