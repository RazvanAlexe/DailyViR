<?php
class videosController extends Controller
{
    function create(){
        if(isset($_POST['create'])){
            require(ROOT . 'Models/Video.php');
            $videos = new Video();
            $videos->addVideo($_COOKIE['username'],$_POST['urlPHP'],$_POST['titleUrlPHP'],$_POST['descriptionUrlPHP'],$_POST['categoryUrlPHP']);
        }

        $this->render("create");
    }

    function search($search){
        require(ROOT . 'Models/Video.php');

        $videos = new Video();

        if(strstr($search,"%20")){
            $searchTerms = explode("%20",$search);
            foreach($searchTerms as $term){
                array_push($d['videos'],$videos->searchVideos($term));
            }
        }
        else
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
        if(isset($_POST['favourite'])){
            $videos->addFavourite($_COOKIE['username'],$_POST['id_videoPHP'],$_POST['titlePHP']);
        }
        if(isset($_POST['comment']))
        {
            $videos->addComment($_POST['id_videoPHP'],$_POST['commentPHP'],$_COOKIE['username']);
        }
        if(isset($_POST['remove']))
        {
            $videos->removeComment($_POST['id_commentPHP']);
        }
        if(isset($_POST['delete']))
        {   
            $videos->deleteComments($viewvideo);
            $videos->deleteVideo($viewvideo);
            header("Location: /MVC_todo/");
        }
        else
        {
            $videos->addView($viewvideo);
            $d['video'] = $videos->getVideoData($viewvideo);
            $d['comments'] = $videos->getComments($viewvideo);
            $this->set($d);
            $this->render("view");
        }
    }
}
?>