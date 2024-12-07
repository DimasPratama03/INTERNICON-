<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        return view('admin.pages.users');
    }

    public function detail()
    {
        return view('admin.pages.detailusers');
    }
}
