<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        if (isset(auth()->user()->level) && auth()->user()->level == 'Admin') {
            return Inertia::location(route('admin.home'));
        }

        return Inertia::render('Admin/Auth/Login');
    }
}

