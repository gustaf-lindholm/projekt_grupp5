<?php
class URLrewrite
{
    /****       Call the class in view with:                 ****/
    /*          URLrewrite::method()                            */
    /*                                                          */
    /*          Returns a url (http://host/public/admin/),      */
    /*          removes the current method and                  */
    /*          replaces it with the requested method           */
    
    public static function adminURL($controller) {

        //filter the url from "" and explode it to array
        $arr = array_filter( explode("/", $_SERVER['REQUEST_URI']));

        // remove the last element in array, i.e the method
        array_pop($arr);

        // create a url
        $url = 'http://'. $_SERVER['HTTP_HOST'] . "/" . implode('/', $arr) . "/" . $controller;

        return $url;

    }

    /***** Returns a url (http://host/public/) with the requested controller *****/

    public static function URL($controller)
    {
        $string =  preg_replace('~admin/~', null,trim($_SERVER['REQUEST_URI']));
        $arr = explode('/', $string);
        $url = 'http://'. $_SERVER['HTTP_HOST'] . implode('/', $arr) . "/";
        return $url . $controller;
        
    }
}

// echo URLrewrite::generateURL(string);

?>