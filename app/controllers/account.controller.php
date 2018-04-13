<?php

class Account extends base_controller 
{

    public function index($name = "")
    {
        echo "account index";

        $this->initModel('account_model');
        //var_dump($this->modelObj);

        
    }

}





?>

<html>
<head>

</head>

<body>

</body>
</html>