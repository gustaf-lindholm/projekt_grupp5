<?php

class CreateNewPosts extends Base_controller
{
    public function Index()
    {
        // instansiate new model using the function built in from the Base Controller
        $this->initModel('CreateNewPosts_model');
    
            //We request modelObjs from the database
        $data = $this->modelObj->CreateNewPosts();

        $this->reqView('CreateNewPosts', $data);

    }

}