<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataUser;


class DashboardController extends Controller
{
    public function index(){
        return view ('dashboard.index');
    }
    // public function indexadmin(){
    //     return view ('admin.dashboard.index');
    // }
   
}
