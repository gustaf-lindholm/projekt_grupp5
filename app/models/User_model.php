<?php

class User_model extends Base_model
{
    public function displayAllUsers()
    {
        $this->sql = 
        "SELECT user.uid, user.level_id, user.fname, user.lname, user.phone, user.email, user_levels.level_type FROM user
        INNER JOIN  user_levels ON user.level_id = user_levels.level_id";
        $this->prepQuery($this->sql);
        $this->getAll();
        return self::$data;
    }
}
