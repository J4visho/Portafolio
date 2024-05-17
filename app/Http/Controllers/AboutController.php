<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
   public function index()
   {
   $titulo="Acerca de Mi";
    return view('about',compact('titulo'));
   }
}
