<?php

class UpdateUser_model extends Base_model
{
    public function UpdateUser()
    {
        $this->sql = 
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

    }
    
}



?>