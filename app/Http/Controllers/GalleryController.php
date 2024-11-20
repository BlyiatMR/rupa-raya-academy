<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        return Inertia::render('GalleryView');
    }
}