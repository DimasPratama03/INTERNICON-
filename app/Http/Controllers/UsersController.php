<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        return view('admin.pages.users'); // Mengarahkan ke views/pages/dashboard.blade.php
    }
}
