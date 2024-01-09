<?php

class Pages extends Controller
{
    public function index()
    {
        // Controller logic here
    }

    public function login(){
        $this->view('pages/login');
    }

    public function register(){
        $this->view('pages/register');
    }

    public function test(){
        $this->view('pages/test');
    }
}
?>