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

    public function architectural()
    {
        return Inertia::render('DetailClass/3darchitectural');
    }

    public function modelling()
    {
        return Inertia::render('DetailClass/3dmodelling');
    }

    public function fullstack()
    {
        return Inertia::render('DetailClass/Fullstack');
    }

    public function flutter()
    {
        return Inertia::render('DetailClass/Flutter');
    }

    public function uiux()
    {
        return Inertia::render('DetailClass/Uiux');
    }
}