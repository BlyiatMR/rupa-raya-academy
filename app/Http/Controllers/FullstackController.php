<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;

class FullstackController extends Controller
{
    public function index()
    {
        return Inertia::render('DetailClass/Fullstack');
    }
}