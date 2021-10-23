<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use App\Mail\MessageReceived;



class MessageController extends Controller
{
    public function store()
    {
      $msg = request()->validate([
      'name' => 'required',
      'email' =>  'required|email',
      'subject'=> 'required',
      'content' => 'required|min:3'

      ]);

      Mail::to('infonery125@gmail.com')->queue(new MessageReceived($msg));


      
      return back()->with('success', 'Recibimos tu mensaje,te responderemos lo mas pronto posible.');

    }
}
