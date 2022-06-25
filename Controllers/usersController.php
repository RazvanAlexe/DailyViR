<?php
class usersController extends Controller
{
    function login()
    {
        if(isset($_POST['login']))
        {
            if($_POST['login'] == 1)
            {
                require(ROOT . 'Models/User.php');
                $users = new User();
                $username = $_POST['usernamePHP'];
                $password = $_POST['passwordPHP'];
                if($users->authenticateUser($username,$password)){
                    $cookie_name = "logged";
                    $cookie_value = "1";
                    setcookie($cookie_name, $cookie_value, time() + 25, "/"); // 86400 = 1 day
                    $cookie_name = "username";
                    $cookie_value = $_POST['usernamePHP'];
                    setcookie($cookie_name, $cookie_value, time() + 25, "/"); // 86400 = 1 day
                }

            }
        }

        $this->render("login");
    }

    function signup()
    {
        if(isset($_POST['signup'])){
            if($_POST['signup'] == 1)
            {
                require(ROOT . 'Models/User.php');
                $users = new User();
                if(!$users->alreadyExists($_POST['usernamePHP']))
                {
                    $cookie_name = "logged";
                    $cookie_value = "1";
                    setcookie($cookie_name, $cookie_value, time() + 120, "/"); // 86400 = 1 day
                    $cookie_name = "username";
                    $cookie_value = $_POST['usernamePHP'];
                    setcookie($cookie_name, $cookie_value, time() + 120, "/"); // 86400 = 1 day
                    $result = $users->addUser($_POST['usernamePHP'],$_POST['genderPHP'],$_POST['emailPHP'],$_POST['passwordPHP'],$_POST['countryPHP'],);
                }
            }
        }

        $this->render("signup");
    }

    function view()
    {
        if(isset($_POST['logout'])){
            if($_POST['logout']==1){
                require(ROOT . 'Models/User.php');
                $users = new User();
                $cookie_name = "logged";
                $cookie_value = "0";
                setcookie($cookie_name, $cookie_value, time() + 25, "/"); // 86400 = 1 day
            }
        }
        if(isset($_POST['changePassword'])){
            if($_POST['changePassword']==1){
                require(ROOT . 'Models/User.php');
                $users = new User();
                $users->changePassword($_COOKIE['username'],$_POST['newPasswordPHP']);
            }
        }
        if(isset($_POST['changeEmail'])){
            if($_POST['changeEmail']==1){
                require(ROOT . 'Models/User.php');
                $users = new User();
                $users->changeEmail($_COOKIE['username'],$_POST['newEmailPHP']);
            }
        }
        if(isset($_POST['export']))
        {
            require(ROOT . 'Models/User.php');
            $users = new User();
            $file = "favourites.csv";
            $txt = fopen($file, "w") or die("Unable to open file!");
            header('Content-Disposition: attachment; filename="test.txt";');
            header('Content-Description: File Transfer');
            header('Content-Disposition: attachment; filename='.basename($file));
            header('Expires: 0');
            header('Cache-Control: must-revalidate');
            header('Pragma: public');
            header('Content-Length: ' . filesize($file));
            header("Content-Type: text/csv");
            fwrite($txt, "id_user, id_video, title\n");
            $results = $users->getFavourites($_COOKIE['username']);
            foreach($results as $result){
                fwrite($txt, $result['id_user'].",".$result['id_video'].",".$result['title']."\n");
            }
            fclose($txt);
            readfile($file);

        }
        $this->render("view");
    }

    function studio()
    {
        require(ROOT . 'Models/User.php');

        $users = new User();
        $d['videos'] = $users->userVideos($_COOKIE['username']);
        $this->set($d);
        $this->render("studio");
    }
}
?>