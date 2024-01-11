<?php

class Pages extends Controller
{
    public function __construct(){
        $this->User = $this->model('User');
        $this->ServiceUser = $this->service('ServiceUser');
    }
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

    public function addUser(){
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->User->Name = $_POST['name'];
            $this->User->Email = $_POST['email'];
            $pw = password_hash($_POST['password'], PASSWORD_BCRYPT);
            $this->User->Password = $pw;
            $this->ServiceUser->Add($this->User);
        }
        redirect('pages/register');
    }

    public function createUserSession($user)
    {
        $_SESSION['user_id'] = $user->id;
        $_SESSION['user_email'] = $user->email;
        $_SESSION['auth'] = true;
    }

    public function test(){
        $this->view('pages/test');
    }
}
?>