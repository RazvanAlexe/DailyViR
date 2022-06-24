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
        if(isset($_POST['export']))
        {

            $file = "test.txt";
            $txt = fopen($file, "w") or die("Unable to open file!");
            fwrite($txt, "lorem ipsum");
            fclose($txt);

            header('Content-Description: File Transfer');
            header('Content-Disposition: attachment; filename='.basename($file));
            header('Expires: 0');
            header('Cache-Control: must-revalidate');
            header('Pragma: public');
            header('Content-Length: ' . filesize($file));
            header("Content-Type: text/plain");
            readfile($file);

        }
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