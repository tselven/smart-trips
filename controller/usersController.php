<?php
use Modules\Controller;
use Modal\User as ModalUsers;

class Users extends Controller{
    function GET(){
        $user = new ModalUsers();
        return $this->JSON($user->getAll());
    }

    //TODO: get items by a id.
    function GETBY($id){
        Controller::view("unset");
    }
    //TODO: save a item.
    function POST(){

    }

    //TODO: Update Items.
    function PUT(){

    }

    //TODO: Delete Items.
    function DELETE(){
        $id = explode('/', $_SERVER['REQUEST_URI'])[3];
        $users =  new ModalUsers();
        $users->delete($id);
    }
}

?>