<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersProfileController extends Controller
{
    public function index()
    {
        return view('users.pages.userprofile');
    }
}
