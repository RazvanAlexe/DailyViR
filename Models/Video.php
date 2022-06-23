<?php
class Video extends Model
{
    function searchVideos($search){
            $sql = "SELECT * FROM video WHERE title LIKE '%" . $search . "%'";
            $req = Database::getBdd()->prepare($sql);
            $req->execute();
            return $req->fetchAll();
    }

}
?>