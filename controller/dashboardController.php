<?php

use Modal\User;
use Modules\Controller;

class Dashboard extends Controller{
    
    function index(){
        $data = [
            "title" => "Home",
        ];
        $this->renderView('Admin/index',$data);
    }

    function users(){
        $user = new User();
        $users = $user->getAll();
        $data = [
            "title" => "Users",
            "users" => $users
        ];
        $this->renderView('Admin/user',$data);
    }

    function add_users(){
        $data['title'] = "Add Users";
        $this->renderView('Admin/add_user',$data);
    }
}