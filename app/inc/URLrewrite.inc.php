<?php
class URLrewrite
{
    /****       Call the class in view with:                 ****/
    /*          URLrewrite::method()                            */
    /*                                                          */
    /*          Returns a url (http://host/public/admin/),      */
    /*          removes the current method and                  */
    /*          replaces it with the requested method           */
    
    private static $prefix = "http://";
    
    public static function adminURL($controller) {

        //filter the url from "" and explode it to array
        $arr = array_filter( explode("/", $_SERVER['REQUEST_URI']));

        // remove the last element in array, i.e the method
        array_pop($arr);

        if(isset($_SERVER["HTTPS"]) && $_SERVER["HTTPS"] == "on")
        {    
            self::$prefix = "https://";   
        }

        // create a url
        $url = self::$prefix . $_SERVER['HTTP_HOST'] . "/" . implode('/', $arr) . "/" . $controller;

        return $url;

    }

    /***** Returns a url (http://host/public/) with the requested controller *****/

    public static function URL($controller)
    {
        $string =  preg_replace('~admin/~', null,trim($_SERVER['REQUEST_URI']));

        $arr = explode('/', $string);
        
        if(isset($_SERVER["HTTPS"]) && $_SERVER["HTTPS"] == "on")
        {    
            self::$prefix = "https://";   
        }

        $url = self::$prefix . $_SERVER['HTTP_HOST'] . implode('/', $arr) . "/";
        return $url . $controller;
        
    }
}

?>