<?php 

class Wikis extends Controller {

    public function __construct(){
        $this->Wiki = $this->model('Wiki');
        $this->ServiceWiki = $this->service('ServiceWiki');
        $this->ServiceCategory = $this->service('ServiceCategory');
        $this->ServiceTag = $this->service('ServiceTag');
        
    }

    public function home(){
        $data = [
            'wikis' => $this->ServiceWiki->Display(),
            'categories' => $this->ServiceCategory->Display(),
            'tags' => $this->ServiceTag->Display()
        ];
        $this->view('wikis/home', $data);
    }

    public function addWiki(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $this->Wiki->Title = $_POST['title'];
            $this->Wiki->Category_ID = $_POST['category'];
            $this->Wiki->Contenu = $_POST['contenu'];
            $this->Wiki->Description = $_POST['description'];
            $this->Wiki->User_ID = '45';
            $wikiId = $this->Wiki->Wiki_ID;
            $this->ServiceWiki->Add($this->Wiki);
            $tags = isset($_POST['tag']) ? $_POST['tag'] : [];

            foreach ($tags as $tag) {
                $this->ServiceWiki->WikiTag($wikiId, $tag);
            }
        }
        redirect('wikis/home');
    }

    public function wikipage(){
        $this->view('wikis/wikipage');
    }
}

?>