<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Contracts\Auth\MustVerifyEmail;

class AboutController extends Controller
{
    public function index()
    {
        return Inertia::render('About');
    }
}