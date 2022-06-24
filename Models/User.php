<?php
class User extends Model
{
    function userVideos($iduser){
        $sql = "SELECT * FROM video WHERE id_user = '". $iduser ."'";
        $req = Database::getBdd()->prepare($sql);
        $req->execute();
        return $req->fetchAll();
    }

    function addUser($iduser,$gender,$email,$password,$country){
        $sql = "INSERT INTO users (username, gender, email, password, country, fav_cat) VALUES ('".$iduser."', '".$gender."', '".$email."', '".$password."', '".$country."', 0);";
        $req = Database::getBdd()->prepare($sql);
        return $req->execute();
    }
    
}
?>