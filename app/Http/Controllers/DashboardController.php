<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.pages.dashboard'); // Mengarahkan ke views/pages/dashboard.blade.php
    }
}
