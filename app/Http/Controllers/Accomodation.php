<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Accomodation extends Controller
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
                $studentHousingInfo = [
                    [ "key" => "Residence", "value" => "Lueti" ],
                    [ "key" => "Room", "value" => "10 (Double)" ],
                    [ "key" => "Housing status", "value" => "Checked In" ]
                ];

                return view('backend/accomodation', compact('studentHousingInfo'));
            }
            default:{
                
            }
        }
        
    }
}
