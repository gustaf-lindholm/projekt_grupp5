<?php

class Changepassword_model extends Base_model {

    public function getAccount($uid) 
    {
        $this->sql =         
        "SELECT * FROM user JOIN account ON account.uid = user.uid WHERE user.uid = :uid"; // both the clients info and password,
        //I'm using * "wildcards" because our database are so small 
        
        // parameters to be bound, is sent to the prepQuery method (doesn't always have to be included)
        $paramBinds = [':uid' => $uid];
        $base = new Base_model;
        
        $base->prepQuery($this->sql, $paramBinds);
        $base->getAll();
        //returns an array of the data from the database which is then printed to the client in the view
        return self::$data;
    }

    public function changeUserPassword($uid) {
 
        $newpassword = md5($_POST['newpassword']);
        $this->sql = "UPDATE `projekt_klon`.`account` SET password = ':newpassword' WHERE uid= :uid";
        $parambinds = [':uid' => $uid, ':newpassword' => $newpassword];
        $this->prepQuery($this->sql, $parambinds);
         die("Your password has been changed");
            session_destroy();
            header('Location:'.URLrewrite::baseURL());
    } 


}



?>