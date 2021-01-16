<?php

namespace App\Http\Controllers;

use App\Mail\EmailSystem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function Send(){
        $data = ['message' => 'การส่งเมล์ด้วย sendinblue smtp'];
        Mail::to('joerocknpc@gmail.com')->send(new EmailSystem($data));
    }
}
