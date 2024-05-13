<?php

use Modules\Controller;
use Modal\User;
use Helpers\Helper;

class Auth extends Controller
{
    function login()
    {
        $username = $_POST['user'];
        $password = $_POST['password'];
        $users = new User();
        $user = $users->select('*')->where("username = '$username' AND password = '$password'")->get();
        if ($user) {
            if (count($user) == 1) {
                $_SESSION['user'] = $user[0]['UserName'];
                if ($_SESSION['user']) {
                    $url = Helper::url('/');
                    header("Location: {$url}");
                } else {
                    echo "error on session login";
                    var_dump($user);
                }
            } else {
                echo "no user found";
            }
        }
    }

    function logout()
    {
        session_destroy();
        $url = Helper::url('/');
        header("Location: {$url}");
    }

    function register()
    {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $type = $_POST['user_type'];
        $con_pass = $_POST['con_pass'];
        if (!empty($username) && !empty($password)) {
            if ($password == $con_pass) {
                $users = new User();
                $users->insert(
                    [
                        'ID' => 'USR_'.$username,
                        'UserName' => $username,
                        'Password' => $password,
                        'UserType' => $type
                    ]
                );
            }
        }
    }
}
