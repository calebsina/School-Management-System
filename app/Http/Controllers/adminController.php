<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\course;
use App\Models\department;
use App\Models\specialitie;



class adminController extends Controller
{
    //display home page
    function index(){
        return view('index');
    }

    //display all courses page
    function allCourses(){
        return view('allCourses');
    }

    //display header
    function header(){
        return view('header');
    }

    public function addCourse(Request $request){
       $request->validate([
           'course_code'=>'required|max:10|unique:courses',
           'course_name'=>'required|unique:courses',
           'semester'=>'required',
           'level'=>'required',
           'lecturer'=>'required',
           'speciality'=>'required'
       ]);
       $course = new course();
       $course->course_code = $request->course_code;
       $course->course_name = $request->course_name;
       $course->semester = $request->semester;
       $course->level = $request->level;
       $course->lecturer = $request->lecturer;
       $course->speciality = $request->speciality;
       $res = $course->save();
       if($res){
           return back()->with('success','course created successfully');
       }else{
            return back()->with('fail','failed to create course');
            redirect('newCourse');
       }

    }

    function addDepart(Request $request){
        $request->validate([
            'name' => 'required|unique:departments',
            'program' => 'required',
            'HOD' => 'required'
        ]);

        $department = new department();
        $department->name = $request->name;
        $department->program = $request->program;
        $department->HOD = $request->HOD;
        $dep = $department->save();
        if($dep){
            return back()->with('success','department created successfully');
        }else{
            return back()->with('fail', 'Department not created');
        }
    }


    function addSpeciality(Request $request){
        $request->validate([
            'name'=>'required|unique:specialities',
            'program'=>'required',
            'tuition'=>'required',
            'dep_id'=>'required'
        ]);

        $speciality = new specialitie();
        $speciality->name = $request->name;
        $speciality->program = $request->program;
        $speciality->tuition = $request->tuition;
        $speciality->dep_id = $request->dep_id;
        $special = $speciality->save();
        if($special){
            return back()->with('success','Speciality Created successfully');
        }else{
            return back()->with('fail','Failed to create Speciality');
        }
    }

}
