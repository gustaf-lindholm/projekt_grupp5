<?php
class Account_model extends Base_model
{
       
    // query the database for one persons id passed in the url, so it's wrong now
    public function getPerson($fname, $lname, $phone, $email)
    {
        $this->sql = 
        "SELECT fname, lname, phone, email FROM projekt_klon.user"; //here you should get both the clients info and include the password
        
        // parameters to be bound, is sent to the prepQuery method
        $paramBinds = ['fname' => $fname, 'lname' => $lname, 'phone' => $phone, 'email' => $email];
        $base = new Base_model;
        
        $base->prepQuery($this->sql, $paramBinds);
        $base->getAll();
        //returns an array of the data from the database which is then printed to the client in the view
        return self::$data;
    }
}





?>