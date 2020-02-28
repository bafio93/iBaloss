<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //Definisco le funzioni del controller HomeController:
    public function index() {
        return view("home");
    }
}
