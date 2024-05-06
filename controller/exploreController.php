<?php

use Modules\Controller;


class Explore extends Controller{
function index(){
        //echo "Welcome";
        //$place = new place();
        ////$places = $place->getAll();
        $data = [
            "title" => "Explore | Smart Trips",
            //"places" => $places
        ];
        $this->renderView('Frontend/explore',$data);
    }
}