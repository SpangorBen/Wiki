<?php

class Dashboard extends Controller {

    public function __construct(){
        $this->Category = $this->model('Category');
        $this->ServiceCategory = $this->service('ServiceCategory');
        $this->Tag = $this->model('Tag');
        $this->ServiceTag = $this->service('ServiceTag');
    }


    public function tags(){
        $data = $this->ServiceTag->Display();
        $this->view('dashboard/tags', $data);
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

    public function deleteCategory($Category_ID){
        $this->ServiceCategory->Delete($Category_ID);
        redirect('dashboard/home');
    }

    public function deleteTag($Tag_ID){
        $this->ServiceTag->Delete($Tag_ID);
        redirect('dashboard/tags');
    }

    public function addTag(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $this->Tag->Title = $_POST['title'];
            $this->ServiceTag->Add($this->Tag);
        }
        redirect('dashboard/tags');
    }
}