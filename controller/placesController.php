<?php

use Core\Controller;
use Config\Config;
use Models\Place;

class Places extends Controller
{
    // Get all items
    function GET()
    {
        if(isset($_GET['lat']) && $_GET['long']){
            $lat = $_GET['lat'];
            $long = $_GET['long'];
            $places =  new Place();
            $res = $places->getClosest($long,$lat);
            return $this->JSON($res);
        }
        if (isset($_POST['place'])) {
            $place = $_POST['place'];
            $places =  new Place();
            $res = $places->select('*')->where("Name LIKE '%{$place}%'")->get();
            return $this->JSON($res);
        } else {
            $places = new Place();
            $data = $places->getAll();
            $i = 0;
            foreach ($data as $r) {
                $data[$i]['Image'] = Controller::Image($r['Image']);
                $i++;
            }
            $this->JSON($data);
        }
    }

    //TODO: get items by a id.
    function GETBY()
    {
        $place = explode('/', $_SERVER['REQUEST_URI'])[2];
        $places =  new Place();
        $res = $places->select('*')->where("Name LIKE '%$place%'")->get();
        echo $this->JSON($res);
    }
    //TODO: save a item.
    function POST()
    {
    }

    //TODO: Update Items.
    function PUT()
    {
    }

    //TODO: Delete Items.
    function DELETE()
    {
        $place = explode('/', $_SERVER['REQUEST_URI'])[3];
        $places =  new Place();
        $res = $places->delete($place);
        echo $this->JSON($res);
    }
}
