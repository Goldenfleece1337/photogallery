<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessagesController extends Controller
{
    public function submit(request $request){
        $this -> validate ($request, [ 
            'name'=> 'required|unique:messages||min:3',
            'email' => 'required|unique:messages||email'
        ]);

         //create message
        $message = new Message;
        $message->name = $request->input('name');
        $message->email = $request->input('email');
        $message->message = $request->input('message');

        $message->save();

        return redirect('/')->with ('succes', 'Message sent'); 
    }

    public function getMessages(){
        $messages = Message::all();
        return view('messages')->with('messages', $messages);
    }

}
