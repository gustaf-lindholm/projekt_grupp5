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
}