<?php
class Account_model extends Base_model
{
       
    // query the database for one persons id passed in the url
    public function getPerson($uid) 
    {
        $this->sql = 
        "SELECT * FROM user JOIN account ON account.uid = user.uid WHERE user.uid = :uid"; // both the clients info and password
        
        // parameters to be bound, is sent to the prepQuery method (doesn't always have to be included)
        $paramBinds = [':uid' => $uid];
        $base = new Base_model;
        
        $base->prepQuery($this->sql, $paramBinds);
        $base->getAll();
        //returns an array of the data from the database which is then printed to the client in the view
        return self::$data;
    }

 
    /*function getPersonForm($person) {
        $this->sql =
        "SELECT * user";

        $base = new Base_model;
        $base->prepQuery($this->sql);
        $base->getAll();

        return self::$data;

        
    }*/
}





?>