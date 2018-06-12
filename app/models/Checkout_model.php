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
        var_dump($_SESSION['cart']->getTotalPrice());
        return self::$data;
    }


    public function placeOrder() {

        var_dump($_SESSION);
        $user_id = isset($_SESSION['loggedIn']['uid']) ? $_SESSION['loggedIn']['uid'] : null;
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
        $totalAmount= $_POST['order_set']['totalPrice'];
    
        $sql = "INSERT INTO projekt_klon.orders (total_amount, payment_status, payment_method, user_id, alternative_address, lname, fname, email) VALUES (:total_amount, :payment_status, :payment_method, :user_id, :alternative_address, :lname, :fname, :email)";
        $paramBinds = [':total_amount' => $totalAmount, ':payment_status' => $payment_status,':payment_method' => $payment_Type, ':user_id' => $user_id, ':alternative_address' => $address, ':lname' => $lname, ':fname' => $fname, ':email' => $email];
        //echo "<h1>Thank you for your purchase</h1><div>We will shortly confirm your payment</div>";
       
        if ($this->prepQuery($sql, $paramBinds)) {
            $order_id = $this->lastInsertId;
            $this->saveOrderItems($order_id);
        } else {
        }

} //End of Place order function

    public function saveOrderItems($order_id) {
        $sku = $_POST['order_set']['sku'];
        $quantity = $_POST['order_set']['quantity'];
        $this->sql = "INSERT INTO `projekt_klon`.`order_items` (`order_id`, `quantity`, `sku`) VALUES (:order_id, :quantity, :sku)";

        var_dump($_POST);
        var_dump($_SESSION);
        //$paramBinds = [':order_id' => $order_id, ':quantity' => $quantity, ':sku' => $sku];
    }

    

}

