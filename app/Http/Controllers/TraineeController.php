<?php

namespace App\Http\Controllers;

use App\Models\Faculty;
use App\Models\School;
use App\Models\TraineesAttendance;
use Illuminate\Http\Request;

class TraineeController extends Controller
{
    public function add_attendance(){
        $schools = School::all();
        $faculties = Faculty::all();
        return view('portal.trainees.take_attendance',['schools'=>$schools, 'faculties'=>$faculties]);
    }

    public function store_attendance(Request $request)
    {
        $request->validate([
            'name'=>"required|string",
            'university_id'=> "required|regex:/20[0-9]{2}\/[0-9]{5}/i",
            'faculty_id' => "required|exists:faculties,id",
            'school_id' => "required|exists:schools,id"
        ]);

        $trainee = new TraineesAttendance();
        $trainee->name = $request->name;
        $trainee->university_id = $request->university_id;
        $trainee->faculty_id = $request->faculty_id;
        $trainee->school_id = $request->school_id;

        $trainee->save();
        return redirect()->back()->with('success','Trainee registered successfully!');
    }

    public function view_attendance(){
        $trainees = TraineesAttendance::with('school')->get();
        return view('portal.trainees.view_attendance',['trainees'=>$trainees]);
    }
}
