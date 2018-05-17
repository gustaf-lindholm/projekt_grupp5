<?php

class UpdateUser_model extends Base_model
{

    public function getUser($uid) 
    {
        $this->sql = 
        "SELECT * FROM user WHERE user.uid = :uid"; //display user info and connects url-id with user id
        
        //"SELECT * FROM user JOIN account ON account.uid = user.uid WHERE user.uid = :uid"; // both the clients info and password
        
        // parameters to be bound, is sent to the prepQuery method (doesn't always have to be included)
        $paramBinds = [':uid' => $uid];
        $base = new Base_model;
        
        $base->prepQuery($this->sql, $paramBinds);
        $base->getAll();
        //returns an array of the data from the database which is then printed to the client in the view
        return self::$data;
    }
    
    public function UpdateUser($uid) {

    $this->sql = "UPDATE FROM `projekt_klon`.`user` WHERE uid= :uid";

        $paramBinds = [':uid' => $uid]; 
        
        if($this->prepQuery($this->sql, $paramBinds))
        {
            echo "working";
        } else {
            echo "fail";
        }


    }


    
       /* $this->sql = 
        "UPDATE user (uid, fname, lname, phone, email)
        VALUES (1, :firstname, :lastname, :phone, :email)";

        $paramBinds = [
            ':firstame' => $_POST['updateU']['firstname'],
            ':lastname' => $_POST['updateU']['lastname'],
            ':phone' => $_POST['updateU']['phone'],
            ':email' => $_POST['updateU']['email'],

        ];

        if($this->prepQuery($this->sql, $paramBinds))
        {
            // empty the newProd post array
            $_POST['updateU'] = [];

            // set a success status which indicates that a new product was added
            $_POST['updateUStatus'] = 'success';

            // send last inserted id
            $_POST['updateUId'] = $this->lastInsertId;
            return true;
            
        } else {

            // set a failed status that indicates a failure with the insertion of new product
            $_POST['updateUStatus'] = 'failed';            
            return false;
        }

    } */
    
}



?>