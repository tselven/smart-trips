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

    function smartPlanner(){
        $place = new place();
        $places = $place->getAll();
        $data = [
            "title" => "Smart Planner | Smart Trips",
            "places" => $places
        ];
        $this->renderView('Frontend/smart',$data);
    }
}