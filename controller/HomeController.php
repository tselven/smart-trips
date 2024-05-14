<?php
use Modules\Controller;
use Modal\Place;
use Modal\Articles;
use Modal\Partners;

class Home extends Controller{
    function index(){
        $place = new place();
        $places = $place->getAll();
        $data = [
            "title" => "Home",
            "places" => $places
        ];
        $this->View('Frontend/index',$data);
    }

    function infoBase(){
        $article = new Articles();
        $articles = $article->getAll();
        $data = [
            "title" => "Info Base | Smart Trips",
            "articles" => $articles
        ];
        $this->View('Frontend/infoBase',$data);
    }

    function guides(){
        $place = new place();
        $places = $place->getAll();
        $data = [
            "title" => "Guides | Smart Trips",
            "places" => $places
        ];
        $this->View('Frontend/guides',$data);
    }
    function hotels(){
        $place = new Partners();
        $places = $place->getAll();
        $data = [
            "title" => "Hotels | Smart Trips",
            "places" => $places
        ];
        $this->View('Frontend/hotels',$data);
    }
    function pay(){
        $place = new place();
        $places = $place->getAll();
        $data = [
            "title" => "Hotels | Smart Trips",
            "places" => $places
        ];
        $this->View('Frontend/payment');
    }
    function details(){
        $place = new place();
        $places = $place->getAll();
        $data = [
            "title" => "Details | Smart Trips",
            "places" => $places
        ];
        $this->View('Frontend/details',$data);
    }
    function dashboard(){
        $place = new place();
        $places = $place->getAll();
        $data = [
            "title" => "Dashboard",
            "places" => $places
        ];
        $this->View('Admin/index',$data);
    }
    function chat(){
        $place = new place();
        $places = $place->getAll();
        $data = [
            "title" => "Chat Bot",
            "places" => $places
        ];
        $this->View('Frontend/chat',$data);
    }
}