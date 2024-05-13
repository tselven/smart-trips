<?php
use Modules\Controller;
use Modal\Guides as GuideModel;

class Guides extends Controller{
    // TODO: Get all items
    function GET(){
        $guides = new GuideModel();
        $data = $guides->getAll();
        return $this->JSON($data);
    }

    //TODO: get items by a id.
    function GETBY($id){
        
    }
    //TODO: save a item.
    function POST(){

    }

    //TODO: Update Items.
    function PUT(){

    }

    //TODO: Delete Items.
    function DELETE(){

    }
}

?>