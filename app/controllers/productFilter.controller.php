<?php 

class ProductFilter extends Base_controller
{
    public function index()
    {
    if(!isset($_POST['filter']['brand'])) {
        $this->reqView('Products');
    }else
    {
        $this->initModel('ProductFilter_model');
        $data = $this->modelObj->getChosenCategory();
        $this->reqView('Products', $data);
    }
    }
}

//     public function resultFilterProduct()
//     {

//     $filterResults = $this->modelObj->
//     $this->reqView('ProductFilter', $filterResults);

//     }
// }
