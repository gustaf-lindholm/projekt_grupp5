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
        //var_dump($_POST);
        //var_dump($_SESSION);

        $order=array();

        $user_id = $_SESSION['loggedIn']['uid'];
        $fname = $_SESSION['user']['first_Name'];
        $lname = $_SESSION['user']['last_Name'];
        $email=$_SESSION['user']['email_Address'];
        $address_1 = $_SESSION['order']['street_address_1'];
        $address_2 = $_SESSION['order']['street_address_2'];
        $zip = $_SESSION['order']['zip'];
        $city = $_SESSION['order']['city'];
        $address = $address_1.$address_2.$zip.$city;

        $payment_Type= $_SESSION['orderPayment']['type'];
        $payment_status="unpaid";
        $status="pending";
        $totalAmount="2000";
    
        $sql = "INSERT INTO projekt_klon.orders (total_amount, payment_status, payment_method, user_id, alternative_address, lname, fname, email) VALUES (:total_amount, :payment_status, :payment_method, :user_id, :alternative_address, :lname, :fname, :email)";
        $paramBinds = [':total_amount' => $totalAmount, ':payment_status' => $payment_status,':payment_method' => $payment_Type, ':user_id' => $user_id, ':alternative_address' => $address, ':lname' => $lname, ':fname' => $fname, ':email' => $email];
        //var_dump($paramBinds);
        echo "<h1>Thank you for your purchase</h1><div>We will shortly confirm your payment</div>";
        var_dump($_SESSION);

        if(isset($_SESSION['loggedIn'])) {
?>


    <div class="col-md-6">
<a href="<?= URLrewrite::BaseURL().'account/saveAddress'?>"/>Save your address in your account</span></a>
    </div>

<?php
} else {
?>


<div class="col-md-6">
    <form method="post" action="<?= URLrewrite::BaseURL().'checkout/createUser'?>">

                <section class="main-container text-center">
                    <div class="main-wrapper">
                    <h1 class="h3 mb-3 font-weight-normal">Create an account with us</h1>

                    <input type="hidden" name="member[level_id]" value="1">
                        <label for="member[username]" class="sr-only">Username <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="member[username]" placeholder="Username"  required autofocus>
                            <label for="member[password]" class="sr-only">Password <span class="text-danger">*</span></label>
                            <input type="password" name="member[password]" class="form-control" placeholder="********" required>
                            <div class="checkbox mb-3">
                            <label>
                        <input type="checkbox" value="remember-me"> Remember me
                        </label>
                    
                    </div>

                    <button type="submit">Create an account</button>
                    </div>
                </section>
    </form>
</div>

<?php
}
        if ($this->prepQuery($sql, $paramBinds)) {
            die("Thank you!!");
        } else {
            die("Try again!");
        }
        $order_id = $this->lastInsertId;

    }

    



    public function CreateUser() {
    

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

    
    public function createAccount()
    {
        /* Allow for alphanumeric character usernames */
        if(ctype_alnum($_POST['member']['username'])) {
            $clean['user_Name']= $_POST['member']['username'];
            }else { print "Please supervise your text again for user_Name";
            }

        $hashed_password = md5($_POST['member']['password']);

        $sql = "INSERT INTO projekt_klon.account (uid, username, password) VALUES (:userId, :username, :hashedPassword)";
        $paramBinds = [':userId' => $userId, ':username' => $clean['username'], ':hashedPassword' => $hashedPassword,];
        //$this->prepQuery($sql, $paramBinds);
        //return true;
            
    }
}

