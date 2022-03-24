<?php

namespace App\Http\Controllers\portal;

use App\Http\Controllers\Controller;
use App\Models\Committee;
use App\Models\Faculty;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MemberController extends Controller
{
    public function add(){
        if(!Auth::user()->hasPermissionTo('add members')){
            return view('portal.errors.403');
        }

        $faculties = Faculty::all();
        $committees = Committee::all();
        return view('portal.members.view',['faculties'=>$faculties,'committees'=>$committees]);
    }

    public function add_action(Request $request)
    {
        $request->validate([
            'name'=>'string|required',
            'nickname'=>'nullable',
            'phone'=>'required',
            'university_id'=> 'required|regex:/^(20)[0-9]{2}\/[0-9]{5}$/i',
            'email'=>'email|required',
            'faculty' => 'required|exists:faculties,id',
            'committee' => 'nullable',
        ]);
        $user = new User;
        $user->name=$request->name;
        $user->phone=$request->phone;
        $user->university_id=$request->university_id;
        $user->email=$request->email;
        $user->faculty_id=$request->faculty;
        if(isset($request->committee)){
            $user->committee_id = $request->committee;
        }
        if(isset($request->nickname)){
            $user->nickname=$request->nickname;
        }

        $user->password = bcrypt("123456");
        $user->save();
        $user->assignRole('Member');
        return redirect()->back()->with('success','Member added successfully');
    }

    public function view()
    {
        $members = User::role('Member')->with('faculty')->with('committee')->get();
        return view('portal.members.view', ['members' => $members]);
    }
}
