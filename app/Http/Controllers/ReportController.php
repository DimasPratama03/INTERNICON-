<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index()
    {
        return view('admin.pages.report');
    }

    public function users()
    {
        return view('users.pages.report');
    }
}
