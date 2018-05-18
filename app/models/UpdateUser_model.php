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

        var_dump($_POST);
		
    
            if (!preg_match('/^[a-zA-Z]*$/', $_POST['user']['fname']) || !preg_match('/^[a-zA-Z]*$/', $_POST['user']['lname']) {
                echo "fel tecken";
            } else {
                if (!filter_var($_POST['user']['email'], FILTER_VALIDATE_EMAIL)) {
                    echo "invalid email";
                } else {
                    $fname = $_POST['user']['fname'];
                    $lname = $_POST['user']['lname'];
                    $email = $_POST['user']['email'];
                    $phone = $_POST['user']['phone'];
        
                        $sql = "UPDATE projekt_klon.user (fname, lname, phone, email) VALUES (:fname, :lname, :phone, :email)";
                        $paramBinds = [':fname' => $fname, ':lname' => $lname, ':phone' => $phone, ':email' => $email];
                        $this->prepQuery($sql, $paramBinds);
                        $userId = $this->lastInsertId;
                        echo $userId;
                        
                       
                        URLrewrite::BaseAdminURL('account/index');


                    }
                }
            }
        
       

    
    
    
    
        /*$this->sql = "UPDATE FROM `projekt_klon`.`user` WHERE uid= :uid";

        $paramBinds = [':uid' => $uid]; 
        
        if($this->prepQuery($this->sql, $paramBinds))
        {
            echo "working";
        } else {
            echo "fail";
        }


    }*/


    
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