<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MessagesController
{
    public function getMessages()
    {
        $messages = DB::table('messages')
            ->select('*')
            ->get();

        return view('messages')
            ->with('messages', $messages);
    }

    public function setMessage(Request $request)
    {
        $name = $request->input('name');
        $message = $request->input('message');
        DB::table('messages')->insert([
            'name' => $name,
            'text' => $message
        ]);

        return view('about_me');
    }
}
