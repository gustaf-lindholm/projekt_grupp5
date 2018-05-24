<?php
class Home extends base_controller 
{
    public function index($name = "")
    {
        $this->initModel('User_model');
        //var_dump($this->modelObj);
        $this->modelObj->name = $name;

        $this->reqView('home', ['name' => $this->modelObj->name]);
        
        //var_dump($this->modelObj);
    }

    public function searchDatabase()
    {
        if(isset($_POST['search']))
        {
        $this->initModel('User_model');
        $data['search'] = $this->modelObj->searchDatabase();
        $this->reqView('home');
        }
    }

}