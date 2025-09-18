<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Dashboard extends Controller
{
    public function index()
    {

        // $user = Auth::user();
        
        // if ($user->hasRole('admin')) {

        //     $teachers = Teacher::latest()->get();
        //     $pupils = Pupil::latest()->get();
        //     $subjects = Subject::latest()->get();
        //     $classes = Classes::latest()->get();

        //     return view('dashboard', compact('teachers','pupils','subjects','classes'));

        // } elseif ($user->hasRole('teacher')) {

        //     $teacher = Teacher::with(['user','subjects','classes','pupils'])->withCount('subjects','classes')->findOrFail($user->teacher->id);

        //     return view('dashboard', compact('teacher'));

        // } elseif ($user->hasRole('pupil')) {
            
        //     $pupil = Pupil::with(['user','guardian','class','attendances'])->findOrFail($user->pupil->id); 

        //     return view('dashboard', compact('pupil'));

        // } else {

        //     $teacher = Teacher::with(['user'])->findOrFail($user->teacher->id);

        //     return view('dashboard', compact('teacher'));
        // }

        return view("backend/dashboard");
        
    }
}
