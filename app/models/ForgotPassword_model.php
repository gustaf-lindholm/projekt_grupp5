<?php

class ForgotPassword_model extends Base_model {

    public function SendEmail() {

        $email = ($_POST['email']);

        


        
    }

    // random password 
    function random_password( $length = 8 ) {
        $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
        $password = substr( str_shuffle( $chars ), 0, $length );
        return $password;
    }

    public function emailPassword () {

        $password = $resetPassword;

        $resetPassword = md5($_POST['newpassword']);

        $this->sql = "UPDATE `projekt_klon`.`account` SET password = :newpassword";
        $parambinds = [':newpassword' => $newpassword];
        $this->prepQuery($this->sql, $parambinds);
         die("Your password has been changed");
            session_destroy();
            header('Location:'.URLrewrite::BaseURL());
    }

}