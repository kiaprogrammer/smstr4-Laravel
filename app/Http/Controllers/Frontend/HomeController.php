<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller {
    public function index(){
        return view("frontend.home");
    }

    public function __construct(){
        $this->middleware('auth');
    }
}