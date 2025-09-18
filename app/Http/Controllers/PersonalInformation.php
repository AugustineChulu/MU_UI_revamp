<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonalInformation extends Controller
{
    public function index()
    {

        // $user = Auth::user();
        $alias = 'student';

        switch($alias){
            case'admin':{
                return view('backend/personal_information');
            }
            case 'student':{
                $studentInformation = [
                    [ "key" => "Student number", "value" => "202102149" ],
                    [ "key" => "Gender", "value" => "male" ],
                    [ "key" => "NRC", "value" => "208611/19/1" ],
                    [ "key" => "Date of birth", "value" => "03/10/2000" ],
                    [ "key" => "Registration status", "value" => "registered" ],
                    [ "key" => "Access level", "value" => "basic" ],
                    [ "key" => "Accommodation Exemption / On Payroll", "value" => "yes, HELSB 2021 List 100%" ],
                    [ "key" => "Exam Center", "value" => "Mulungushi University" ],
                ];

                $programeInformation = [
                    [ "key" => "Study", "value" => "Bachelor of Science in Computer Science" ],
                    [ "key" => "School", "value" => "School of Engineering and Technology (SET)" ],
                ];

                $studentContactDetails = [
                    [ "key" => "Street name", "value" => "640 Kalembwe st, Salama Park, Lusaka" ],
                    [ "key" => "Postal code", "value" => "c/o Mr Abdon Yezi P.O.Box 310180 Lusaka" ],
                    [ "key" => "Town Country", "value" => "Lusaka Zambia" ],
                    [ "key" => "Mobile Phone", "value" => "0955404699" ],
                    [ "key" => "Private Email", "value" => "chuluaugustine@gmail.com" ],
                ];

                $nextOfKinDetails = [
                    [ "key" => "Full name", "value" => "" ],
                    [ "key" => "Relationship", "value" => "" ],
                    [ "key" => "Street", "value" => "" ],
                    [ "key" => "Town", "value" => "" ],
                    [ "key" => "Postal code", "value" => "" ],
                ];

                $educationHistory = [
                    [ "key" => "Name of institution", "value" => "Luangwa Secondary" ],
                    [ "key" => "Level of certificate", "value" => "Certificate" ],
                    [ "key" => "Name of certificate", "value" => "Grade 12" ],
                    [ "key" => "Image of certificate", "value" => "" ],
                ];

                return view('backend/personal_information', compact('studentInformation','programeInformation', 'studentContactDetails', 'nextOfKinDetails', 'educationHistory'));
            }
            default:{
                
            }
        }
        
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
        
    }
}
