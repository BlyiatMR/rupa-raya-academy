<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Inertia\Inertia;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $course = Course::all();
        return Inertia::render('Admin/Course/Index', [
            'course' => $course
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $courseNow = Course::find($id);
        return Inertia::render('Admin/Course/Edit', [
            'course' => $courseNow
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // $courseNow = Course::find($id);
        // return Inertia::render('Admin/Course/Edit', [
        //     'course' => $courseNow
        // ]);
        try {
            $course = Course::find($id);
            $course->delete();

            return redirect()->route('course.index')->with('success','Berhasil menghapus lowongan');
        } catch (\Throwable $th) {
            return redirect()->route('course.index')->with('error','Terjadi kesalahan');
        }
    }
}
