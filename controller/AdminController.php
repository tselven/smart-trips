<?php
use Modules\Controller;
use Helpers\Helper;
class Admin extends Controller{

    function login(){
        $data = [
            "title" => "Login | Smart Trips",
            "name"=> "Thamilselven",
        ];
        $view = "Auth/Login";
        $this->renderView($view, $data);
    }

    function register(){
        $data = [
            "title" => "Register | Smart Trips",
        ];
        $view = "Auth/register";
        $this->renderView($view, $data);
    }
}
?>