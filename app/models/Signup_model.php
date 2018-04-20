<?php

class Signup_Model extends Base_model
{
	// här bygger jag olika metoder som kan hantera och göra olika saker
    public function signup()
    {
    	$User = new User;
            $userId = $User->createUser([
                'level_id' => $_POST['level_id'],
                'fname' => $_POST['fname'],
                'lname' => $_POST['lname'],
                'email' => $_POST['email'],
                'phone' => $_POST['phone'],
                'username' => $_POST['username'],
                'password' => $_POST['password']
            ]);

            if (empty($_POST['fname']) || empty($_POST['lname']) || empty($_POST['email']) || empty($_POST['phone']) || empty($_POST['username']) || empty($_POST['password'])) {
            	echo "du måste fylla i de tomma fälten";
            } else {
            	if (!preg_match('/^[a-zA-Z]*$/', $_POST['fname']) || !preg_match('/^[a-zA-Z]*$/', $_POST['lname'])) || !preg_match('/^[a-zA-Z]*$/', $_POST['username'])) {
            		echo "fel tecken";
            	} else {
            		if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            			echo "invalid email";
            		} else {
            			$level_id = $_POST['level_id'];
            			$fname = $_POST['fname'];
            			$lname = $_POST['lname'];
            			$email = $_POST['email'];
            			$phone = $_POST['phone'];
            			$username = $_POST['username'];
            			$sql = "SELECT FROM account WHERE username = '$username'";
            			$result = query($sql);
            			$resultCheck = mysql_fetch_row($result);
            			if ($resultCheck > 0) {
            				echo "username already taken";
            			} else {
            				$hashedPassword = password_hash($_POST['password'], PASSWORD_DEFAULT);
            				$sql = "INSERT INTO projekt_klon.user (level_id, fname, lname, phone, email) VALUES (:level_id, :fname, :lname, $phone, $email)";
            				$paramBinds = [':level_id' => $level_id, ':fname' => $fname, ':lname' => $lname, ':phone' => $phone, ':email' => $email];
					        $User = new User;
					        prepQuery($sql, $paramBinds = []);
					        $userId = PDO::lastInsertId();
					        
					        $sql = "INSERT INTO projekt_klon.account (uid, username, password) VALUES (:userId, :username, :hashedPassword)";
					        $paramBinds = [':userId' => $userId, ':username' => $username, ':hashedPassword' => $hashedPassword,];
					        $account = new Account;
					        prepQuery($sql, $paramBinds = []);

						}
            		}
            	}
            }
    }

    public function companySignup() {
        echo "Company Signup!";
    }
}

