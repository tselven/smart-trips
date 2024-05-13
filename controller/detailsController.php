<?php

use Modules\Controller;
use Modal\Place as place;


class Details extends Controller
{
    function index()
    {
        $type = explode('/', $_SERVER['REQUEST_URI'])[2];
        $name = explode('/', $_SERVER['REQUEST_URI'])[3];
        $obj = new place;
        $info = $obj->select('*')->where("Name LIKE '%{$name}%'")->get();
        $isFree = ($info[0]['isFree'] == 1) ? "Free" : "Paid";
        $data = [
            "title" => "Details | Smart Trips",
            "name" => $info[0]['Name'],
            "description" => $info[0]['Description'],
            "price" => $isFree
        ];
        $this->View('Frontend/details', $data);
    }
}
