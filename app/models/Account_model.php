<?php
class Account_model extends Base_model
{
       
    // query the database for one person  is passed in the url
    public function getPerson($fname, $lname)
    {
        $this->sql = 
        "SELECT fname, lname FROM projekt_klon.user";
        
        // parameters to be bound, is sent to the prepQuery method
        $paramBinds = ['fname' => $fname, 'lname' => $lname];
        $base = new Base_model;
        
        $base->prepQuery($this->sql, $paramBinds);
        $base->getAll();
        //returns an array of the data from the database which is then printed to the client in the view
        return self::$data;
    }
}

echo "account test" . "" ;






/*mysql_connect("localhost", "root","root");
mysql_select_db("projekt_klon");

$sql = mysql_query("SELECT * FROM projekt_klon.user"); 

$uid = 'uid';
$level_id = 'level_id';
$fname = 'fname';
$lname = 'lname';
$phone = 'phone';
$email = 'email';

$rows = mysql_fetch_assoc($sql); 

echo 'Welcome,' . "" . $rows[$fname];*/


?>