<?php 

class Filter extends Base_controller
{
    public function index()
    {
        $this->initModel('Filter_model');
        $data = $this->modelObj->filterForProducts();
        $this->reqView('filter', $data);

    }
}