<?php
use Modules\Controller;

class Web extends Controller{
    function index(){
        $name = explode('/',$_SERVER['REQUEST_URI'])[2];
        $data = [
            "title" => "Home",
            "name"=> $name
        ];
        $view = "Web/index";
        $this->View($view, $data);
    }

    function test(){
        $data['name'] = $_GET['name'];
        $this->View('Frontend/text',$data);
    }
}