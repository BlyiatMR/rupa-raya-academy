<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Mentor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
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
        $course = Course::where('isActive', 1)->get();
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

            'banner'                => 'required|mimes:jpeg,png,jpg,webp|max:10240',
            'schedule_img'          => 'required|mimes:jpeg,png,jpg,webp|max:10240',
            'photos1'               => 'nullable|mimes:jpeg,png,jpg,webp|max:10240',
            'photos2'               => 'nullable|mimes:jpeg,png,jpg,webp|max:10240',
            'photos3'               => 'nullable|mimes:jpeg,png,jpg,webp|max:10240',
            'photos4'               => 'nullable|mimes:jpeg,png,jpg,webp|max:10240',


            'start_date'            => 'required',
            'times_of_meeting'      => 'required',
            'duration_of_meeting'   => 'required',
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
            'mentor_profile_img'    => Rule::requiredIf(function() use ($request){
                return !$request->has('mentor_id');
            }),
        ]);


        // Saving To Database
        $bannerPath = $request->file('banner')->store('course/banner', 'public');
        $schedulePath = $request->file('schedule_img')->store('course/schedule', 'public');

        // Photos
        $photos1path = '';
        if ($request->hasFile('photos1')) {
            $photos1path = $request->file('photos1')->store('course/photos', 'public');
        }
        $photos2path = '';
        if ($request->hasFile('photos2')) {
            $photos2path = $request->file('photos2')->store('course/photos', 'public');
        }
        $photos3path = '';
        if ($request->hasFile('photos3')) {
            $photos3path = $request->file('photos3')->store('course/photos', 'public');
        }
        $photos4path = '';
        if ($request->hasFile('photos4')) {
            $photos4path = $request->file('photos4')->store('course/photos', 'public');
        }


        $course = new Course();

        if ($request->mentor_name !== '') {
            $mentor = new Mentor();
            $mentorPath = $request->file('mentor_profile_img')->store('mentor/profile-photos', 'public');

            $mentor->name        =   $request->mentor_name;
            $mentor->profile     =   $request->mentor_profile;
            $mentor->job         =   $request->mentor_job;
            $mentor->profile_img =   $mentorPath;
            $mentor->fb_link     =   $request->mentor_fb;
            $mentor->ig_link     =   $request->mentor_ig;
            $mentor->twt_link    =   $request->mentor_twt;
            $mentor->save();
            $request->merge(['mentor_id' => $mentor->id]);
        }

        $course->title                  =   $request->title;

        $course->banner_img             =   $bannerPath;

        $course->start_date             =   $request->start_date;
        $course->end_date               =   $request->start_date;
        $course->times_of_meeting       =   $request->times_of_meeting;
        $course->duration_of_meeting    =   $request->duration_of_meeting;
        $course->schedule_img           =   $schedulePath;

        $course->price                  =   $request->price;
        $course->last_price             =   $request->last_price;

        $course->tools                  =   $request->tools;
        $course->location               =   $request->location;
        $course->facility               =   $request->facility;
        $course->benefit                =   $request->benefit;
        $course->registration_link      =   $request->registration_link;

        $course->photos1                =   $photos1path;
        $course->photos2                =   $photos2path;
        $course->photos3                =   $photos3path;
        $course->photos4                =   $photos4path;

        $course->mentor_id              =   $request->mentor_id;

        $course->slug                   =   Str::slug($request->title).'-'.Str::random(6);

        $course->description            =   $request->description;

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
        $course = Course::with('mentor')->find($id);
        $mentors = Mentor::all();
        return Inertia::render('Admin/Course/Edit', [
            'course' => $course,
            'mentors' => $mentors
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title'                 => 'required|min:5',
            // 'new_banner'            => 'required|mimes:jpeg,png,jpg,webp|max:10240',
            'start_date'            => 'required',
            'times_of_meeting'      => 'required',
            'duration_of_meeting'   => 'required',
            'description'           => 'required|min:5',

            'mentor_id'             => 'nullable|exists:mentors,id',
            'new_mentor_name'           => Rule::requiredIf(function() use ($request){
                return !$request->has('mentor_id');
            }),
            'new_mentor_profile'        => Rule::requiredIf(function() use ($request){
                return !$request->has('mentor_id');
            }),
            'new_mentor_job'            => Rule::requiredIf(function() use ($request){
                return !$request->has('mentor_id');
            }),
        ]);
        $course = Course::find($id);

        if(isset($request->new_photos1)){
            if(isset($course->photos1)){
                Storage::delete($course->photos1);
            }
            $course->photos1 = $request->file('new_photos1')->store('course/photos', 'public');
        } else {
            $course->photos1 = $request->photos1;
        }

        if(isset($request->new_photos2)){
            if(isset($course->photos2)){
                Storage::delete($course->photos2);
            }
            $course->photos2 = $request->file('new_photos2')->store('course/photos', 'public');
        } else {
            $course->photos2 = $request->photos2;
        }

        if(isset($request->new_photos3)){
            if(isset($course->photos3)){
                Storage::delete($course->photos3);
            }
            $course->photos3 = $request->file('new_photos3')->store('course/photos', 'public');
        } else {
            $course->photos3 = $request->photos3;
        }

        if(isset($request->new_photos4)){
            if(isset($course->photos4)){
                Storage::delete($course->photos4);
            }
            $course->photos4 = $request->file('new_photos4')->store('course/photos', 'public');
        } else {
            $course->photos4 = $request->photos4;
        }

        if(isset($request->new_schedule_img)){
            if(isset($course->schedule_img)){
                Storage::delete($course->schedule_img);
            }
            $course->schedule_img = $request->file('new_schedule_img')->store('course/schedule', 'public');
        } else {
            $course->schedule_img = $request->schedule_img;
        }

        if(isset($request->new_banner)){
            if(isset($course->banner)){
                Storage::delete($course->banner);
            }
            $course->banner_img = $request->file('new_banner')->store('course/banner', 'public');
        } else {
            $course->banner_img = $request->banner;
        }

        $course->title                  =   $request->title;

        $course->start_date             =   $request->start_date;
        $course->end_date               =   $request->start_date;
        $course->times_of_meeting       =   $request->times_of_meeting;
        $course->duration_of_meeting    =   $request->duration_of_meeting;
        $course->price                  =   $request->price;
        $course->last_price             =   $request->last_price;

        $course->tools                  =   $request->tools;
        $course->location               =   $request->location;
        $course->facility               =   $request->facility;
        $course->benefit                =   $request->benefit;
        $course->registration_link      =   $request->registration_link;
        $course->description            =   $request->description;

        if ($request->new_banner !== null) {
            $bannerPath = $request->file('new_banner')->store('course/banner', 'public');
            $course->banner_img             = $bannerPath;
        } else {
            $course->banner_img             = $request->banner;
        }

        // Jika user membuat mentor baru
        if ($request->new_mentor_name !== null && $request->new_mentor_profile !== null && $request->new_mentor_job !== null) {
            $mentor = new Mentor();
            if(isset($mentor->profile_img)){
                Storage::delete($mentor->profile_img);
            }
            $mentorFile = $request->file('photos4')->store('course/photos', 'public');
            $mentor->name                   =   $request->new_mentor_name;
            $mentor->profile                =   $request->new_mentor_profile;
            $mentor->job                    =   $request->new_mentor_job;
            $mentor->profile_img            =   $mentorFile;
            $mentor->fb_link                =   $request->new_mentor_fb;
            $mentor->ig_link                =   $request->new_mentor_ig;
            $mentor->twt_link               =   $request->new_mentor_twt;
            $mentor->save();
            $request->merge(['mentor_id' => $mentor->id]);
            $course->mentor_id              =   $mentor->id;
        } else { // Jika user tidak membuat mentor baru maka akan memasukkan request lama
            $course->mentor_id              =   $request->mentor_id;
            $mentor = Mentor::find($request->mentor_id);
            if ($mentor->id != $course->mentor_id) { // ini jika mentor_id di course tidak sama dengan mentor_id di request
                $mentor->name                   =   $request->mentor_name;
                $mentor->profile                =   $request->mentor_profile;
                $mentor->job                    =   $request->mentor_job;
                $mentor->profile_img            =   $request->mentor_profile_img;
                $mentor->fb_link                =   $request->mentor_fb_link;
                $mentor->ig_link                =   $request->mentor_ig_link;
                $mentor->twt_link               =   $request->mentor_twt_link;
                $mentor->save();
            }
        }
        $course->save();
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
            $course->isActive = 0;
            $course->save();

            return redirect()->route('course.index')->with('success','Berhasil menghapus kelas');
        } catch (\Throwable $th) {
            return redirect()->route('course.index')->with('error','Terjadi kesalahan');
        }
    }
}
