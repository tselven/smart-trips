<?php

use Modal\User;
use Modal\Partners;
use Modal\Articles;
use Modal\Guides;;
use Modules\Controller;

class Dashboard extends Controller{
    
    function index(){
        $data = [
            "title" => "Home",
        ];
        $this->View('Admin/index',$data);
    }

    function users(){
        $user = new User();
        $users = $user->getAll();
        $data = [
            "title" => "Users",
            "users" => $users
        ];
        $this->View('Admin/user',$data);
    }

    function add_users(){
        $data['title'] = "Add Users";
        $this->View('Admin/add_user',$data);
    }

    function partners(){
        $partner = new Partners();
        $partners = $partner->getAll();
        $data = [
            "title" => "Partners",
            "users" => $partners
        ];
        $this->View('Admin/partner',$data);
    }

    function guides(){
        $guide = new Guides();
        $guides = $guide->getAll();
        $data = [
            "title" => "Guides",
            "guides" => $guides
        ];
        $this->View('Admin/guide',$data);
    }

    function articles(){
        $article = new Articles();
        $articles = $article->getAll();
        $data = [
            "title" => "Articles",
            "articles" => $articles
        ];
        $this->View('Admin/article',$data);
    }

    function profile(){
        //$article = new Articles();
        //$articles = $article->getAll();
        $data = [
            "title" => "Profile",
            //"articles" => $articles
        ];
        $this->View('Admin/profile',$data);
    }
}