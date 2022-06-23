<?php
class videosController extends Controller
{
    function create(){
        require(ROOT . 'Models/Video.php');

        $videos = new Video();

        $this->render("create");
    }

    function search($search){
        require(ROOT . 'Models/Video.php');

        $videos = new Video();

        $d['videos'] = $videos->searchVideos($search);
        $this->set($d);
        $this->render("search");
    }
}
?>