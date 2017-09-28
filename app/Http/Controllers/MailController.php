<?php

namespace App\Http\Controllers;

use App\Mail\Mailtrap;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function index()
    {
    	Mail::to('ryan.viajedor1990@gmail.com')->send(new Mailtrap());
    }
}
