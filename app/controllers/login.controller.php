<?php

/**
* 
*/
class Login extends Base_controller
{
	
	public function index()
    {
        $this->reqView('login/index');
    }

    public function login() 
    {
    	$this->reqView('login/login');
    }

    public function login() 
    {
    	$this->reqView('login/logout');
    }
}