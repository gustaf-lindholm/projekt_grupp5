<?php

class Signup_Model extends base_model
{
	// här bygger jag olika metoder som kan hantera och göra olika saker
    public function signupUser()
    {
		//var_dump($_POST);
		
    	    if (empty($_POST['user']['fname']) || empty($_POST['user']['lname']) || empty($_POST['user']['email']) || empty($_POST['user']['phone']) || empty($_POST['user']['username']) || empty($_POST['user']['password'])) {
				echo "du måste fylla i de tomma fälten";
				
            } else {
            	if (!preg_match('/^[a-zA-Z]*$/', $_POST['user']['fname']) || !preg_match('/^[a-zA-Z]*$/', $_POST['user']['lname']) || !preg_match('/^[a-zA-Z]*$/', $_POST['user']['username'])) {
            		echo "fel tecken";
            	} else {
            		if (!filter_var($_POST['user']['email'], FILTER_VALIDATE_EMAIL)) {
            			echo "invalid email";
            		} else {
            			$level_id = $_POST['user']['level_id'];
            			$fname = $_POST['user']['fname'];
            			$lname = $_POST['user']['lname'];
            			$email = $_POST['user']['email'];
            			$phone = $_POST['user']['phone'];
            			$username = $_POST['user']['username'];
            			$sql = "SELECT * FROM `projekt_klon`.`account` WHERE username = ':username'";
                        $paramBinds = [':username' => $username];
                        $this->prepQuery($sql, $paramBinds);
            			$resultCheck = $this->getAll();
                        var_dump($resultCheck);
            			if (!empty($resultCheck)) {
            				echo "username already taken";
                            //var_dump($resultCheck);
            			} else {
            				$hashedPassword = md5($_POST['user']['password']);
            				$sql = "INSERT INTO projekt_klon.user (level_id, fname, lname, phone, email) VALUES (:level_id, :fname, :lname, :phone, :email)";
            				$paramBinds = [':level_id' => $level_id, ':fname' => $fname, ':lname' => $lname, ':phone' => $phone, ':email' => $email];
					        $this->prepQuery($sql, $paramBinds);
					        $userId = $this->lastInsertId;
					        
					       	$sql = "INSERT INTO projekt_klon.account (uid, username, password) VALUES (:userId, :username, :hashedPassword)";
					        $paramBinds = [':userId' => $userId, ':username' => $username, ':hashedPassword' => $hashedPassword,];
					        $this->prepQuery($sql, $paramBinds);
							return true;

						}
            		}
            	}
            }
    }
}