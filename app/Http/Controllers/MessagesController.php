<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class MessagesController extends Controller
{
    public function submit(Request $request){

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required'
        ]);

        //Create a new message
        $message = new Message;
        $message->name = $request->input('name');
        $message->email = $request->input('email');
        $message->message = $request->input('message');

        //Save Message
        $message->save();

        return redirect('/')->with('success', 'Message Sent');
    }

    public function getMessages(){
        $messages = Message::all();

        return View('messages')->with('messages', $messages);
    }
}
