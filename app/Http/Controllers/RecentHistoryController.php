<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecentHistoryController extends Controller
{
    public function index()
    {
        return view('admin.pages.recenthistory'); 
    }

    public function detail()
    {
        return view('admin.pages.detailhistory');
    }
}
