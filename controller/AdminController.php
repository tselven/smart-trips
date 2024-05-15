<?php
use Core\Controller;
class Admin extends Controller{

    function login(){
        $data = [
            "title" => "Login | Smart Trips",
            "name"=> "Thamilselven",
        ];
        $view = "Auth/Login";
        $this->View($view, $data);
    }

    function register(){
        $data = [
            "title" => "Register | Smart Trips",
        ];
        $view = "Auth/register";
        $this->View($view, $data);
    }
}
?>