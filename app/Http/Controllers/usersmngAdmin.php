<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class usersmngAdminController extends Controller
{

public function index()
    {
        return view('usersmngAdmin');
    }
}
