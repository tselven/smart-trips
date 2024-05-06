<?php

use Modules\Controller;

class Dashboard extends Controller{
    function index(){
        $data = [
            "title" => "Home",
        ];
        $this->renderView('Admin/index',$data);
    }
}