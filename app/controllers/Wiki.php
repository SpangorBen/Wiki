<?php 

class Wiki extends Controller {

    public function __construct(){
        
    }

    public function home(){
        $this->view('wiki/home');
    }
}

?>