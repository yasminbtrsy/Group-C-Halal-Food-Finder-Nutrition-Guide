<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainPageController extends Controller
{
    public function index()
    {
        // Return the Blade view located at 'resources/views/mainpage1.blade.php'
        return view('mainpage1');
    }
}

