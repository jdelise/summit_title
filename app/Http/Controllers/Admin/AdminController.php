<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function getDashboard() {
        $user = auth()->user();
        return view('admin.dashboard', compact('user'));
    }
}
