<?php
class User extends Model
{
    function userVideos($iduser){
        $sql = "SELECT * FROM video WHERE id_user = '". $iduser ."'";
        $req = Database::getBdd()->prepare($sql);
        $req->execute();
        return $req->fetchAll();
    }
}
?>