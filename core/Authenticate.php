<?php
namespace Modules;
use Modal\User;

class Authenticate{
    protected function login($username, $password){

    }

    protected static function logout(){

    }
    protected function isPro($user){
        
    }
    protected function isAdmin($user){

    }
    public function getUser($user){
        $users = new User();
        $type = $users->select('User_Type')->where("username = '{$user}' ")->get();
        return $type[0]['User_Type'];
    }
    protected function sendOTP($user){
        
    }

    protected function verifyOTP($user,$otp){

    }

}