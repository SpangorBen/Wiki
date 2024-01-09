<?php

class Dashboard extends Controller {

    public function __construct(){
        $this->Category = $this->model('Category');
        $this->ServiceCategory = $this->service('ServiceCategory');
    }


    public function tags(){
        $this->view('dashboard/tags');
    }

    public function home(){
        $data = $this->ServiceCategory->Display();
        $this->view('dashboard/home', $data);
    }

    public function addCategory(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $this->Category->Title = $_POST['title'];
            $this->Category->Description = $_POST['description'];
            $this->ServiceCategory->Add($this->Category);
        }
        redirect('dashboard/home');
    }
}