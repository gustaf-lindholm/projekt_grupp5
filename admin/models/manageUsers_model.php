<?php

class manageUsers_model extends base_model
{
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
    
    public function deleteUser($uid)
    {
        $this->sql ="DELETE FROM projekt_klon.user WHERE uid = :userId";

        $paramBinds = [':userId' => $uid];

        //echo $this->sql;
        // set status depending on sql query result
        if ($this->prepQuery($this->sql, $paramBinds)) {
            Registry::setStatus(['deleteUser' => true]);            
            return true;
        } else {
            Registry::setStatus(['deleteUser' => false]);
            return false;            
        }

    }
}