<?php
use Modules\Controller;
use Modal\Partners as PartnerModel;
class partners extends Controller{
    // TODO: Get all items
    function GET(){
        $partners = new PartnerModel();
        $data = $partners->getAll();
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