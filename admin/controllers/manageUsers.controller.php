<?php

class manageUsers extends Base_controller
{
    public function Index()
    {
        $this->initModel('manageUsers_model');

        $data['users'] = $this->modelObj->getAllUsers();

        $this->reqView('ManageUsers', $data);
    }
    
    public function deleteUser($uid)
    {
        $this->initModel('manageUsers_model');

        $this->modelObj->deleteUser($uid);

        $this->Index();
    }

    public function getUserInfo($uid)
    {
        $this->initModel('manageUsers_model');

        $data['adress'] = $this->modelObj->getUserAdress($uid);

        $data['userInfo'] = $this->modelObj->getSpecificUser($uid);

        $this->reqView('editUserInfo', $data);
    }

    public function updateUserInfo($uid)
    {

        $this->initModel('manageUsers_model');
        
        echo "You will be redirected in 5s";

        if($this->modelObj->updateUserInfo($uid))
        {
            echo '<div class="alert alert-success alert-dismissible grid-alert" role="alert">Address updated!</div>';
        }

        if($this->modelObj->updateAddress($uid))
        {
            echo '<div class="alert alert-success alert-dismissible grid-alert" role="alert">User info updated!</div>';  
        }

        $this->modelObj->updateUserName($uid);
        
        header('Refresh:3;'.URLrewrite::baseAdminUrl('ManageUsers/getUserInfo/').$uid);

    }

    public function updatePassword($uid)
    {
        $this->initModel('ManageUsers_model');

        if($this->modelObj->updatePassword($uid))
        {
            echo '<div class="alert alert-success alert-dismissible grid-alert" role="alert">Password updated!</div>';  
            
        }

        header('Refresh:3;'.URLrewrite::baseAdminUrl('ManageUsers/getUserInfo/').$uid);
    }

    public function createUser()
    {
        //var_dump($_SERVER['REQUEST_URI']);
        $this->initModel('Signup_model');
    }
}