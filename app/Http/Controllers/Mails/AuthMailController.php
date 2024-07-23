<?php

namespace App\Http\Controllers\Mails;

use App\Http\Controllers\Controller;
use App\Mail\RegisterEmail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AuthMailController extends Controller
{
    //
    public function sendRegisterEmail(){

        $user = new User();
        $user->name = 'Ivan Francisco';

        $registerEmail = new RegisterEmail($user->name);

        return $registerEmail;
        //Mail::to('ivantkd1@gmail.com')->send($registerEmail);

    }
}
