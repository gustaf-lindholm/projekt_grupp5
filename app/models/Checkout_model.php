<?php
class Checkout_model extends Base_model
{
    //The index function brings user account information which will automatically fill in the form
    public function index() {
        $this->sql ="SELECT user.uid, user.level_id, user_levels.level_type, fname, lname, phone, username, creation_time, modification_time, password
        FROM projekt_klon.user JOIN account
        ON user.uid = account.uid JOIN user_levels
        ON user.level_id = user_levels.level_id";

        $this->prepQuery($this->sql);

        $this->getAll();

        return self::$data;
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


    public function placeOrder() {
        $order=array();
        
        $address_1 = $_POST['order']['street_address_1'];
        $address_2 = $_POST['order']['street_address_2'];
        $zip = $_POST['order']['zip'];
        $city = $_POST['order']['city'];
        $address = implode("/",$order);
        $payment_Type= $_POST['orderPayment']['type'];

        $sql = "INSERT INTO projekt_klon.orders (payment_method, user_id, alternative_address, lname, fname, email) VALUES (:payment_method, :user_id, :alternative_address, :lname, :fname, :email)";
        $paramBinds = [':payment_method' => $payment_Type, ':user_id' => $_POST['user_id'], ':lname' => $clean['last_Name'], ':phone' => $clean['phone_Number'], ':email' => $clean['email_Address']];
        $this->prepQuery($sql, $paramBinds);
        $userId = $this->lastInsertId;

        //Saving all data for order: Payment method, Address, Email address if not a member
    }

    
    public function CreateUser() {
    
        var_dump($_POST);
        /*Initialize an array for filtered data*/
        $clean = array();

        /* Hash the passwords */
        
         /* Allow for alphabetical names */
         if(ctype_alpha($_POST['user']['first_Name'])) {
        $clean['first_Name']= $_POST['user']['first_Name'];
        }else { print "Please supervise your text again for first_Name";
            }
        
        if(ctype_alpha($_POST['user']['last_Name'])) {
                $clean['last_Name']= $_POST['user']['last_Name'];
                }else { print "Please supervise your text again for last_Name";
                    }

        /*
        if(ctype_alnum($_POST['user']['email_Address'])) {
            $clean['email_Address']= $_POST['user']['email_Address'];
            }else { print "Please supervise your text again for email_Address";
            }
        */

        $clean['email_Address']= $_POST['user']['email_Address'];
        $clean['level_id'] = $_POST['user']['level_id'];

        /* Allow for numeric telephone number */
        if(ctype_digit($_POST['user']['telephone_Number'])) {
            $clean['telephone_Number']= $_POST['user']['telephone_Number'];
            }else { print "Please supervise your text again";
            }
        
        $sql = "INSERT INTO projekt_klon.user (level_id, fname, lname, phone, email) VALUES (:level_id, :fname, :lname, :phone, :email)";
        $paramBinds = [':level_id' => $level_id, ':fname' => $clean['first_Name'], ':lname' => $clean['last_Name'], ':phone' => $clean['phone_Number'], ':email' => $clean['email_Address']];
        $this->prepQuery($sql, $paramBinds);
        $userId = $this->lastInsertId;
            

           
        if($this->prepQuery($this->sql, $paramBinds)){
         Registry::setStatus(['CreateUser' => true]); 
         echo "fungerar";
         //alert for if the database got the sql string or not
            //header('Location:'.URLrewrite::BaseURL());
        } else {
            echo "fungerar inte";
         Registry::setStatus(['CreateUser' => false]);
            
        }
    
    }

<<<<<<< HEAD
    public function placeOrder() 
    {
        $_SESSION['order'] = $_POST['order'];
        
    }
=======
    public function createAccount()
    {
        /* Allow for alphanumeric character usernames */
        if(ctype_alnum($_POST['member']['username'])) {
            $clean['user_Name']= $_POST['member']['username'];
            }else { print "Please supervise your text again for user_Name";
            }

        $hashed_password = md5($_POST['member']['password']);
>>>>>>> 078903cd34e79b1a8bb41baea787e94c73ad62b0

        $sql = "INSERT INTO projekt_klon.account (uid, username, password) VALUES (:userId, :username, :hashedPassword)";
        $paramBinds = [':userId' => $userId, ':username' => $clean['username'], ':hashedPassword' => $hashedPassword,];
        //$this->prepQuery($sql, $paramBinds);
        //return true;
            
    }
}

