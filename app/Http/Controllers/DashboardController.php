<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard', [
            'siteName' => 'Decorunic 3D Management',
            'title' => 'Dashboard'
        ]);
    }
}
