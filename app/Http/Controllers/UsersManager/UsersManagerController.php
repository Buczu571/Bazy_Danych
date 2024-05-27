<?php

namespace App\Http\Controllers\UsersManager;

use Illuminate\Http\Request;

class UsersManager extends Controller
{
    public function index()
    {
        return view('admin.usersmanager');
    }
}
