<?php
class Checkout_model extends Base_model
{
    public function index() {
        $this->sql ="SELECT user.uid, user.level_id, user_levels.level_type, fname, lname, phone, username, creation_time, modification_time, password
        FROM projekt_klon.user JOIN account
        ON user.uid = account.uid JOIN user_levels
        ON user.level_id = user_levels.level_id";

        $this->prepQuery($this->sql);

        $this->getAll();

        return self::$data;
        // $this->sql = 
        // "SELECT * FROM projekt_klon.order JOIN product_variants ON projekt_klon.order.pid = product_variants.product_id 
        // AND projekt_klon.order.variant_id = product_variants.variant_id WHERE projekt_klon.order.uid = :uid";
        // $binds = [':uid' => $uid];
        // $this->prepQuery($this->sql, $binds);
        // $data = $this->getAll();
        // return $data;
    }

    public function getUser($uid) 
    {
        $this->sql = 
        "SELECT * FROM user WHERE user.uid = :uid"; 
        
        $paramBinds = [':uid' => $uid];
        $base = new Base_model;
        
        $base->prepQuery($this->sql, $paramBinds);
        $base->getAll();
        return self::$data;
    }

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

    public function signupUser()
    {
		var_dump($_POST);
		
    	    if (empty($_POST['user']['first_Name']) || empty($_POST['user']['last_Name']) || empty($_POST['user']['email']) || empty($_POST['user']['phone']) || empty($_POST['user']['username']) || empty($_POST['user']['password'])) {
				echo "Please enter value";
				
            } else {
            	if (!preg_match('/^[a-zA-Z]*$/', $_POST['user']['first_Name']) || !preg_match('/^[a-zA-Z]*$/', $_POST['user']['last_Name'])) {
            		echo "Please review";
            	} else {
            		if (!filter_var($_POST['user']['email_Address'], FILTER_VALIDATE_EMAIL)) {
            			echo "Please enter a valid email";
            		} else {
            			$level_id = $_POST['user']['level_id'];
            			$fname = $_POST['user']['first_Name'];
            			$lname = $_POST['user']['last_Name'];
            			$email = $_POST['user']['email_Address'];
            			$phone = $_POST['user']['telephone_Number'];
            			$username = $_POST['user']['username'];
            			$sql = "SELECT FROM account WHERE username = ':username'";
                        $paramBinds = [':username' => $username];
                        $this->prepQuery($sql, $paramBinds);
            			$resultCheck = $this->getAll();
                        var_dump($resultCheck);
            			if (!empty($resultCheck)) {
            				echo "username already taken";
                            var_dump($resultCheck);
            			} else {
            				$hashedPassword = md5($_POST['user']['password']);
            				$sql = "INSERT INTO projekt_klon.user (level_id, fname, lname, phone, email) VALUES (:level_id, :fname, :lname, :phone, :email)";
            				$paramBinds = [':level_id' => $level_id, ':fname' => $fname, ':lname' => $lname, ':phone' => $phone, ':email' => $email];
					        $this->prepQuery($sql, $paramBinds);
					        $userId = $this->lastInsertId;
                            echo $userId;
					        
					       $sql = "INSERT INTO projekt_klon.account (uid, username, password) VALUES (:userId, :username, :hashedPassword)";
					        $paramBinds = [':userId' => $userId, ':username' => $username, ':hashedPassword' => $hashedPassword,];
					        $this->prepQuery($sql, $paramBinds);
                            echo "Success new account";


						}
            		}
            	}
            }
    }
}

