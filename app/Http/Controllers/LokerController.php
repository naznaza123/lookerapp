<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LokerController extends Controller
{
    public function index(){
        return view ('dashboard.loker');
    }
}
