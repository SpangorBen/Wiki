<?php

class Dashboard extends Controller {

    public function __construct(){
        $this->Category = $this->model('Category');
        $this->ServiceCategory = $this->service('ServiceCategory');
    }

    public function home(){
        $this->view('dashboard/home');
    }

    public function addCategory(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $this->Category->Title = $_POST['title'];
            $this->Category->Description = $_POST['description'];
            $this->ServiceCategory->Add($this->Category);
        }
        $this->view('dashboard/home');
    }
}