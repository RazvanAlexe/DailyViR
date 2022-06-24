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
    
    function trending(){
        require(ROOT . 'Models/Video.php');

        $videos = new Video();

        $d['videos'] = $videos->trendingVideos();
        $this->set($d);
        $this->render("trending");
    }
    
    function stats($statsvideo){
        require(ROOT . 'Models/Video.php');

        $videos = new Video();

        $d['video'] = $videos->getVideoData($statsvideo);
        $d['stats'] = $videos->getVideoStats($statsvideo);
        $this->set($d);
        $this->render("stats");
    }

    function view($viewvideo){
        require(ROOT . 'Models/Video.php');

        $videos = new Video();

        $videos->addView($viewvideo);
        $d['video'] = $videos->getVideoData($viewvideo);
        $d['comments'] = $videos->getComments($viewvideo);
        $this->set($d);
        $this->render("view");
    }
}
?>