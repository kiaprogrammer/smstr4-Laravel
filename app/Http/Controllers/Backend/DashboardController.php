<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view('backend.dashboard');
    }
    public function dashboard(){
        $user = Auth::user();
        return view('backend.layouts.template', compact('user'));
    }
}
