<?php

class User extends Base_controller
{

    static protected $table_name = "users";
    static protected $db_columns = ['uid', 'user_level', 'fname', 'lname', 'phone', 'email'];

    public $uid;
    public $user_level;
    public $fname;
    public $lname;
    public $username;
    protected $hashed_password;
    public $password;
    public $confirm_password;


    // public function __construct($args=[])
    // {
    //      // $this->fname= $args['fname'] ?? '';
    //     // $this->fname= $args['lname'] ?? '';
    //     // $this->username= $args['username'] ?? '';
    //     // $this->password= $args['password'] ?? '';
    //     // $this->confirm_password= $args['confirm_password'] ?? '';
    // }

    public function show_Full_Name()
    {
        $this->initModel('User_model');

         //We request modelObjs from the database
         $data = $this->modelUsers->getAllProducts();

         //This will be shown on our products page
         $this->reqView('Products', $data);
 
    }

}
