<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BiletyController extends Controller
{
    public function index(){
        return view('bilety');
    }
}
