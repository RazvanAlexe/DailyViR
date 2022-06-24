<?php
class usersController extends Controller
{
    function login()
    {
        if(isset($_POST['login'])){
            require(ROOT . 'Models/User.php');
            $users = new User();
            $cookie_name = "logged";
            $cookie_value = "1";
            setcookie($cookie_name, $cookie_value, time() + 25, "/"); // 86400 = 1 day
            $cookie_name = "username";
            $cookie_value = $_POST['usernamePHP'];
            setcookie($cookie_name, $cookie_value, time() + 25, "/"); // 86400 = 1 day
        }

        $this->render("login");
    }

    function signup()
    {
        if(isset($_POST['signup'])){
            require(ROOT . 'Models/User.php');
            $users = new User();
            $cookie_name = "logged";
            $cookie_value = "1";
            setcookie($cookie_name, $cookie_value, time() + 25, "/"); // 86400 = 1 day
            $cookie_name = "username";
            $cookie_value = $_POST['usernamePHP'];
            setcookie($cookie_name, $cookie_value, time() + 25, "/"); // 86400 = 1 day
            $result = $users->addUser($_POST['usernamePHP'],$_POST['genderPHP'],$_POST['emailPHP'],$_POST['passwordPHP'],$_POST['countryPHP'],);
        }

        $this->render("signup");
    }

    function view()
    {
        require(ROOT . 'Models/User.php');

        $users = new User();

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