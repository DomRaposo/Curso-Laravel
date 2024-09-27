<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\LoginController;

class DashboardController extends Controller
{

    public function index()
    {
        return view('admin.dashboard');
    }
}
