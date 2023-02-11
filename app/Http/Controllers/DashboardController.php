<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
    	return view('dashboards.index');
    }

    public function maintenance()
    {
    	return view('page-404');
    }
}
