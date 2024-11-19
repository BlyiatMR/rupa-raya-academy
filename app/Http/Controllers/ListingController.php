<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    public function index()
    {
        return Inertia::render('ListingView');
    }
}