<?php

// this class makes it easy to send status from models and controllers to a view
class Registry 
{
    private static $status = [];

    // set status
    public static function setStatus($status)
    {
        self::$status = $status;
    }

    // get the status with the inserted index
    public static function getStatus($index = null)
    {
        // if the entered index is in $status array
        // return that status
        if (isset(self::$status[$index])) {
            return self::$status[$index];            
        } else {
            return self::$status;
        }
    }
}