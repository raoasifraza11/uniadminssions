<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    //

    public function basic_email(){
        $data = ['name' => 'Asif Raza'];
    }
}
