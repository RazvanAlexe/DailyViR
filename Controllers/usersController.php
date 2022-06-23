<?php
class usersController extends Controller
{
    function login()
    {
        require(ROOT . 'Models/User.php');

        $users = new User();

        $this->render("login");
    }

    function signup()
    {
        require(ROOT . 'Models/User.php');

        $users = new User();

        $this->render("signup");
    }

    function view()
    {
        require(ROOT . 'Models/User.php');

        $users = new User();

        $this->render("view");
    }
}
?>