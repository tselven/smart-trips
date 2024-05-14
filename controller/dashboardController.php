<?php

use Modal\User;
use Modal\Partners;
use Modal\Articles;
use Modal\Guides;
use Modules\Authenticate;
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
        $author = $_SESSION['user'];
        $auth = new Authenticate();
        $usr_type = $auth->getUser($author);
        $article = new Articles();
        if($usr_type = "Admin"){
            $articles = $article->getAll();
        }
        else{
            $articles = $article->select('*')->where("author = '{$author}'")->get();
        }
        $data = [
            "title" => "Articles",
            "articles" => $articles
        ];
        $this->View('Admin/article',$data);
    }

    function profile(){
        $obj = new User();
        $user = $obj->select('*')->where("username = '{$_SESSION['user']}'")->get();
        $data = [
            "title" => "Profile",
            "user" => $user
        ];
        $this->View('Admin/profile',$data);
    }
}