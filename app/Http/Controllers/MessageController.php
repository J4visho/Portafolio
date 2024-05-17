<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Message;

class MessageController extends Controller
{
    public function create()
    {
        $titulo = "Mensaje"; // Definimos la variable $titulo
        return view('messages.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'email' => 'required|email',
            'mensaje' => 'required',
        ]);
        
        Message::create($request->all());
        session()->flash('success');

        return redirect()->route('messages.success');
    }
}
