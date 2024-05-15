<?php

use Core\Controller;
use Core\Helper;
use Models\Partners;
use Models\Place as place;


class Details extends Controller
{
    function index()
    {
        $type = explode('/', $_SERVER['REQUEST_URI'])[2];
        $name = explode('/', $_SERVER['REQUEST_URI'])[3];
        
        $obj = new place();
        $info = $obj->select('*')->where("ID = '$name'")->get();
        $isFree = ($info[0]['isFree'] == 1) ? "Free" : "Paid";
        $data = [
            "title" => "Details | Smart Trips",
            "name" => $info[0]['Name'],
            "description" => $info[0]['Description'],
            "image" => Helper::url('/image/'.$info[0]['Image']),
            "price" => $isFree
        ];
        $this->View('Frontend/details', $data);
    }
}
