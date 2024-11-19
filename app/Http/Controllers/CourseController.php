<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Mentor;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Inertia\Inertia;
use Str;

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
        // $course = Course::all();
        return Inertia::render('Admin/Course/Create', [
            'mentor' => Mentor::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'                 => 'required|min:5',
            'type'                  => 'required|min:5',
            'banner'                => 'required|mimes:jpeg,png,jpg,webp|max:10240',
            'start_date'            => 'required',
            'times_of_meeting'      => 'required',
            'duration_of_meeting'   => 'required',
            'price'                 => 'nullable',
            'last_price'            => 'nullable',
            'tools'                 => 'nullable',
            'location'              => 'nullable',
            'facility'              => 'nullable',
            'benefit'               => 'nullable',
            'suitable_person'       => 'nullable',
            'description'           => 'required|min:5',

            'mentor_id'             =>   'nullable|exists:mentors,id',
            'mentor_name'           => Rule::requiredIf(function() use ($request){
                return !$request->has('mentor_id');
            }),
            'mentor_profile'        => Rule::requiredIf(function() use ($request){
                return !$request->has('mentor_id');
            }),
            'mentor_job'            => Rule::requiredIf(function() use ($request){
                return !$request->has('mentor_id');
            }),
        ]);


        // Saving To Database

        $bannerPath = $request->file('banner')->store('course/banner', 'public');

        if (!$request->has('mentor_id')) {
            $mentor = new Mentor();
            $mentor->name        =   $request->mentor_name;
            $mentor->profile     =   $request->mentor_profile;
            $mentor->job         =   $request->mentor_job;
            $mentor->save();
            $request->merge(['mentor_id' => $mentor->id]);
        }

        $course = new Course();
        $course->title                  =   $request->title;
        $course->type                   =   $request->type;
        $course->banner_img             =   $bannerPath;
        $course->start_date             =   $request->start_date;
        $course->start_date             =   $request->start_date;
        $course->times_of_meeting       =   $request->times_of_meeting;
        $course->duration_of_meeting    =   $request->duration_of_meeting;
        $course->price                  =   $request->price;
        $course->last_price             =   $request->last_price;
        $course->tools                  =   $request->tools;
        $course->location               =   $request->location;
        $course->facility               =   $request->facility;
        $course->benefit                =   $request->benefit;
        $course->suitable_person        =   $request->suitable_person;
        $course->slug                   =   Str::slug($request->title).'-'.Str::random(6);
        $course->price                  =   $request->price;
        $course->description            =   $request->description;
        $course->mentor_id              =   $request->mentor_id;

        $course->save();


        return redirect()->route('course.index')->with('success','Sukses, anda telah menambahkan data');

        // Course::create([
        //     'title' => $request->title,
        //     'type' => $request->type,
        //     'banner_img' => $fileName,
        //     'start_date' => $request->start_date,
        //     'slug' => Str::slug($request->title).'-'.Str::random(6),
        //     'price' => $request->price,
        //     'description' => $request->description,
        // ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $slug)
    {
        $courseNow = Course::with('mentor')->where('slug', $slug)->first();
        return Inertia::render('Admin/Course/Detail', [
            'course' => $courseNow
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $course = Course::find($id);
        return Inertia::render('Admin/Course/Edit', [
            'course' => $course
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => ['required', 'min:5'],
            'type' => ['required', 'min:5'],
            'start_date' => ['required'],
            'price' => ['required'],
            'description' => ['required', 'min:5'],
        ]);

        Course::whereId($id)->update([
            'title' => $request->title,
            'type' => $request->type,
            'start_date' => $request->start_date,
            'price' => $request->price,
            'description' => $request->description,
        ]);
        return redirect()->route('course.index')->with('success','Sukses, anda telah mengubah data');
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

            return redirect()->route('course.index')->with('success','Berhasil menghapus kelas');
        } catch (\Throwable $th) {
            return redirect()->route('course.index')->with('error','Terjadi kesalahan');
        }
    }
}
