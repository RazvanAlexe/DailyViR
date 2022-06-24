<?php
class Video extends Model
{
    function searchVideos($search){
            $sql = "SELECT * FROM video WHERE title LIKE '%" . $search . "%'";
            $req = Database::getBdd()->prepare($sql);
            $req->execute();
            return $req->fetchAll();
    }

    function trendingVideos(){
        $sql = "SELECT * FROM video ORDER BY views DESC LIMIT 3";
        $req = Database::getBdd()->prepare($sql);
        $req->execute();
        return $req->fetchAll();
    }
    
    function addView($idvideo){
        $sql = "UPDATE video SET views = views + 1 WHERE id_video =".$idvideo;
        $req = Database::getBdd()->prepare($sql);
        $req->execute();
    }

    function getVideoData($idvideo){
        $sql = "SELECT * FROM video WHERE id_video = ".$idvideo;
        $req = Database::getBdd()->prepare($sql);
        $req->execute();
        return $req->fetch();
    }

    function getVideoStats($idvideo){
        $sql = "SELECT * FROM statistcs WHERE id_video = ".$idvideo;
        $req = Database::getBdd()->prepare($sql);
        $req->execute();
        return $req->fetch();
    }

    function getComments($idvideo){
        $sql = "SELECT * FROM comments WHERE id_video = ".$idvideo;
        $req = Database::getBdd()->prepare($sql);
        $req->execute();
        return $req->fetchAll();
    }
}
?>