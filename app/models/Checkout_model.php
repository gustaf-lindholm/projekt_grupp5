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
        //$base = new Base_model;
        
        $this->prepQuery($this->sql, $paramBinds);
        $this->getAll();
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
        $totalAmount= $_POST['order']['totalPrice'];
    
        $sql = "INSERT INTO projekt_klon.orders (total_amount, payment_status, payment_method, user_id, alternative_address, lname, fname, email) VALUES (:total_amount, :payment_status, :payment_method, :user_id, :alternative_address, :lname, :fname, :email)";
        $paramBinds = [':total_amount' => $totalAmount, ':payment_status' => $payment_status,':payment_method' => $payment_Type, ':user_id' => $user_id, ':alternative_address' => $address, ':lname' => $lname, ':fname' => $fname, ':email' => $email];
        echo "<h1>Thank you for your purchase</h1><div>We will shortly confirm your payment</div>";

        //unset session for the order processed
        //unset($_SESSION["order"]);

        if(isset($_SESSION['loggedIn'])) {
?>


    <div class="col-md-6">
<a href="<?= URLrewrite::BaseURL().'account/saveAddress'?>"/>Save your address in your account</span></a>
    </div>

<?php
} else {
?>


<div class="col-md-6">
    <form method="post" action="<?= URLrewrite::BaseURL().'signup/createUserFromOrder'?>">
                <section class="main-container text-center">
                    <div class="main-wrapper">
                    <h1 class="h3 mb-3 font-weight-normal">Create an account with us</h1>

                    <input type="hidden" name="member[level_id]" value="1">
                        <label for="newmember[username]" class="sr-only">Username <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="newmember[username]" placeholder="Username"  required autofocus>
                            <label for="newmember[password]" class="sr-only">Password <span class="text-danger">*</span></label>
                            <input type="password" name="newmember[password]" class="form-control" placeholder="********" required>
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
            saveOrderItems();
        } else {
            die("Try again!");
        }
        $order_id = $this->lastInsertId;

} //End of Place order function

    public function saveOrderItems() {
        echo "Here is the list of products ordered in alphabetical order";
        //var_dump($_SESSION);
    }

    

}

