<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function admin()
    {
        return view('admin.pages.dashboard'); 
    }

    public function users()
    {
        return view('users.pages.dashboard'); 
    }
}
