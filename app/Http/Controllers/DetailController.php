<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function fullstack()
    {
        return Inertia::render('DetailClass/Fullstack');
    }

    public function flutter()
    {
        return Inertia::render('DetailClass/Flutter');
    }
}