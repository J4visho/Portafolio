<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function index()
    {   
        $titulo="Portafolio";
        return view('portafolio',compact('titulo'));
    }
}
