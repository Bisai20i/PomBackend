<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\welcomemail;

class MailController extends Controller
{
    public function sendEmail(){
        $toEmail = "pujapaudel08@gmail.com";
        $subject = "Welcome to PomPalace Dear puja Miss";
        Mail::to($toEmail)->send(new welcomemail($subject));
    }
}
