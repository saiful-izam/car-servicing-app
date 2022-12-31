<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    
    public function index() {
        return view('services.index');
    }

    public function serviceHistory() {
        return view('services.serviceHistory');
    }
}
