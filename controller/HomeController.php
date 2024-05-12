<?php
use Modules\Controller;
use Modal\Place;
class Home extends Controller{
    function index(){
        $place = new place();
        $places = $place->getAll();
        $data = [
            "title" => "Home",
            "places" => $places
        ];
        $this->renderView('Frontend/index',$data);
    }

    function infoBase(){
        $place = new place();
        $places = $place->getAll();
        $data = [
            "title" => "Info Base | Smart Trips",
            "places" => $places
        ];
        $this->renderView('Frontend/infoBase',$data);
    }

    function guides(){
        $place = new place();
        $places = $place->getAll();
        $data = [
            "title" => "Guides | Smart Trips",
            "places" => $places
        ];
        $this->renderView('Frontend/guides',$data);
    }
    function hotels(){
        $place = new place();
        $places = $place->getAll();
        $data = [
            "title" => "Hotels | Smart Trips",
            "places" => $places
        ];
        $this->renderView('Frontend/hotels',$data);
    }
    function pay(){
        $place = new place();
        $places = $place->getAll();
        $data = [
            "title" => "Hotels | Smart Trips",
            "places" => $places
        ];
        $this->renderView('Frontend/payment');
    }
    function details(){
        $place = new place();
        $places = $place->getAll();
        $data = [
            "title" => "Details | Smart Trips",
            "places" => $places
        ];
        $this->renderView('Frontend/details',$data);
    }
    function dashboard(){
        $place = new place();
        $places = $place->getAll();
        $data = [
            "title" => "Dashboard",
            "places" => $places
        ];
        $this->renderView('Admin/index',$data);
    }
    function chat(){
        $place = new place();
        $places = $place->getAll();
        $data = [
            "title" => "Chat Bot",
            "places" => $places
        ];
        $this->renderView('Frontend/chat',$data);
    }
}