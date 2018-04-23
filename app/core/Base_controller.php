<?php

class Base_controller
{

    // the instance of the called model - is set in the initModel method
    protected $modelObj;

    
    public function initModel($model)
    {
        require_once MODEL_PATH . $model . '.php';
        $this->modelObj = new $model();
    }

    public function reqView($view, $data = [])
    {

        require_once VIEW_PATH . $view . '.view.php';
    }
}

