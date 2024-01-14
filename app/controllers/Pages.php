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

    public function loginMethode(){
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $email = $_POST['email'];
            $pw = $_POST['password'];
            $this->ServiceUser->authenticate($email, $pw);
        }
        if($_SESSION['user'] == 'admin'){
            redirect('dashboard/home');
        }
        if($_SESSION['user'] == 'author'){
            redirect('wikis/home');
        }
    }

    public function register(){
        $this->view('pages/register');
    }

    public function addUser(){
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            if($this->ServiceUser->findUserByEmail($_POST['email'])){
                redirect('pages/register');
            } else{
                $this->User->Name = $_POST['name'];
                $this->User->Email = $_POST['email'];
                $pw = password_hash($_POST['password'], PASSWORD_BCRYPT);
                $this->User->Password = $pw;
                $this->ServiceUser->Add($this->User);
                $this->createUserSession($this->User);
                redirect('wikis/home');
            }
        }
    }

    public function createUserSession($user)
    {
        $_SESSION['user_id'] = $user->User_ID;
        $_SESSION['user_email'] = $user->Email;
        $_SESSION['user'] = 'author';
    }

    public function logout()
    {
        unset($_SESSION['user_id']);
        unset($_SESSION['user_email']);
        unset($_SESSION['user']);
        session_destroy();
        redirect('pages/login');
    }

    public function test(){
        $this->view('pages/test');
    }
}
?>