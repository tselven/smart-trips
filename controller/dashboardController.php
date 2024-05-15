<?php

use Models\User;
use Models\Partners;
use Models\Articles;
use Models\Guides;
use Core\Authenticate;
use Core\Controller;

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

    function add_partners(){
        $data['title'] = "Add Partners";
        $this->View('Admin/add_partner',$data);
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

    function add_guides(){
        $data['title'] = "Add Guides";
        $this->View('Admin/add_guide',$data);
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
    function add_articles(){
        $data['title'] = "Add Articles";
        $this->View('Admin/add_article',$data);
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