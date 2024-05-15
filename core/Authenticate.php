<?php
namespace Core;
use Models\User;

class Authenticate
{
    protected function login($username, $password)
    {
    }

    protected static function logout()
    {
    }
    protected function isPro($user)
    {
    }

    public function getUser($user)
    {
        $users = new User();
        $type = $users->select('User_Type')->where("username = '{$user}' ")->get();
        return $type[0]['User_Type'];
    }
    protected function sendOTP($user)
    {
        $to_email = "recipient@example.com";
        $subject = "Test Email";
        $body = "Your OTP is ";

        $headers = "From: sender@example.com\r\n";
        $headers .= "Reply-To: sender@example.com\r\n";
        $headers .= "Content-type: text/html\r\n";
        if (mail($to_email, $subject, $body, $headers)) {
            return true;
        } else {
            return false;
        }
    }

    protected function verifyOTP($user, $otp)
    {
    }
}
