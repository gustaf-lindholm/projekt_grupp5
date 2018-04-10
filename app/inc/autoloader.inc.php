<?php

require_once '../app/init.php';

function autoloader($className)
{
    //include CONTROLLER_PATH . $className . '.controller.php';
    //include MODEL_PATH . $className . '.php';
    //include INC_PATH . $className . '.inc.php';
    //include CORE_PATH . $className . '.php';
    //require_once PRIVATE_PATH . $className . '.php';

    if (file_exists(INC_PATH . $className . '.inc.php')) {
        include INC_PATH . $className . '.inc.php';        
    }

    if (file_exists(CORE_PATH . $className . '.php'))
    {
        include CORE_PATH . $className . '.php';    
    }
    
}

spl_autoload_register('autoloader');