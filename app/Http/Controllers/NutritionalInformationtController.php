<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;

class NutritionalInformationtController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    // Add a method to handle the nutritional information view
    public function index()
    {
        return view('nutritionalinformationt');
    }
}
