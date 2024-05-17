<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $titulo="Contacto";
        return view('contacto',compact('titulo'));
    }
}
