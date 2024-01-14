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
        if($_SESSION['user'] == 'admin'){
            $data = $this->ServiceCategory->Display();
            $this->view('dashboard/home', $data);
        } else{
            redirect('pages/login');
        }
    }

    public function addCategory(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $this->Category->Title = $_POST['title'];
            $this->Category->Description = $_POST['description'];
            $this->ServiceCategory->Add($this->Category);
        }
        redirect('dashboard/home');
    }

    public function editCategory(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $this->Category->Category_ID = $_POST['catId'];
            $this->Category->Title = $_POST['title'];
            $this->Category->Description = $_POST['description'];
            $this->ServiceCategory->Update($this->Category);
        }
        redirect('dashboard/home');
    }

    public function editTag(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $this->Tag->Tag_ID = $_POST['tagId'];
            $this->Tag->Title = $_POST['tagTitle'];
            $this->ServiceTag->Update($this->Tag);
        }
        redirect('dashboard/tags');
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