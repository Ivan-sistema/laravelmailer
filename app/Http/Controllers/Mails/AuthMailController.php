<?php

namespace App\Http\Controllers\Mails;

use App\Http\Controllers\Controller;
use App\Mail\RegisterEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AuthMailController extends Controller
{
    //
    public function sendRegisterEmail(){
        $registerEmail = new RegisterEmail();

        Mail::to('ivantkd1@gmail.com')->send($registerEmail);

    }
}
