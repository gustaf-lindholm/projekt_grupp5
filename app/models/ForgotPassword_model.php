<?php

class ForgotPassword_model extends Base_model {

        // random password 
        function random_password( $length = 8 ) {
            $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
            $password = substr( str_shuffle( $chars ), 0, $length );
            return $password;
        
        }

    public function SendEmail() {

        $email = ($_POST['email']);

        $hashTempPass = md5($password);

        $to = $email;
        $from = "OUR EMAIL ADRESS";
        
        $headers = "From: $from";
        
        $subject = "Temporary Password to our Website";
        
        $msg = '<h2>Hello' .$email.'</h2><p>This is a automatic message from our website, you recently requested to get a new password. 
        Your new temporary password is:</br>'. $password. 'You can change your password when you like as long as you log in with this one first!
        </br> Click on this link to get an easy access to the sign in page. <a href="signinpage"></a>';
        

        $emailMessage = mail($to, $from, $headers, $subject, $msg);

        echo $emailMessage;

        
    }


    public function emailPassword () {

        //$password = $resetPassword;

        //$resetPassword = md5($_POST['newpassword']);

        $this->sql = "UPDATE `projekt_klon`.`account` SET password = :password";
        $parambinds = [':newpassword' => $newpassword];
        $this->prepQuery($this->sql, $parambinds);
         die("Your password has been changed");
            session_destroy();
            header('Location:'.URLrewrite::BaseURL());
    }

}