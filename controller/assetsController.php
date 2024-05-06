<?php

use Modules\Controller;
use Config\Config;
use Modules\Media;

class assets extends Controller
{
    // TODO: Get all items
    public $types = [
        "css" => "text/css",
        "js" => "application/javascript",
    ];
    function Video()
    {
        $data = explode('/',$_SERVER['REQUEST_URI']);
        $path = implode("/", array_slice($data, 2));
        $file = $path;
        $media = new Media();
        $media->video($file);
    }

    //TODO: get items by a id.
    function Files()
    {
        $data = explode('/',$_SERVER['REQUEST_URI']);
        $type = $data[2];
        $id = $data[3];
        if (isset($this->types[$type])) {
            $cont = $this->types[$type];
            header("Content-Type: $cont");
            $path = Config::$root_path . '/views/src/' . $type . '/' . $id;
            $file = file_get_contents($path);
            echo $file;
        }else{
            Controller::view('404');
        }
    }
    //TODO: save a item.
    function Audio()
    {
        $data = explode('/',$_SERVER['REQUEST_URI']);
        $path = implode("/", array_slice($data, 2));
        $file = $path;
        $media = new Media();
        $media->audio($file);
    }

    //TODO: Update Items.
    function Img()
    {
        $data = explode('/',$_SERVER['REQUEST_URI']);
        $path = implode("/", array_slice($data, 2));
        $file = $path;
        $media = new Media();
        $media->image($file);
    }

    //TODO: Delete Items.
    function DELETE()
    {

    }

    
}
