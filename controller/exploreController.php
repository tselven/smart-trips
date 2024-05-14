<?php
use Modal\Place;
use Modules\Controller;


class Explore extends Controller{
function index(){
        if(isset($_SESSION['lat']) && isset($_SESSION['long'])){
            $place = new Place();
            $places = $place->getClosest($_SESSION['long'], $_SESSION['lat']);
        }else{
            $place = new Place();
            $places = $place->getAll();
        }
        $data = [
            "title" => "Explore | Smart Trips",
            "places" => $places
        ];
        $this->View('Frontend/explore',$data);
    }
}