<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\timetable;
use App\Models\course;
use App\Models\department;
use App\Models\specialitie;
use App\Models\exam;
use Illuminate\Support\Facades\DB;


class adminController extends Controller
{
    //display home page
    function index(){
        return view('index');
    }

    //display all courses page
    public function allCourses(){
        $data = DB::table('specialities')->
        join('departments','specialities.dep_id','=','departments.dep_id')->
        select('specialities.*','departments.dep_name')->get();
        return view('allCourses',['specialitie'=>$data]);
    }

    //view courses for each department
    function showCourse($name){
        $data = specialitie::find($name);
        $new = DB::table('specialities')->
            join('courses','specialities.name', '=', 'courses.speciality')->
            select('courses.*','specialities.name')->get();
        return view('courses',['data'=>$new]);
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
            'dep_name' => 'required|unique:departments',
            'program' => 'required',
            'HOD' => 'required'
        ]);

        $department = new department();
        $department->dep_name = $request->dep_name;
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

    function addTimeTable(Request $request){
        $request->validate([
            'program'=>'required',
            'special'=>'required',
            'course'=>'required',
            'day'=>'required',
            'hall'=>'required',
            'time'=>'required'
        ]);

        $time = new timetable();
        $time->program = $request->program;
        $time->special = $request->special;
        $time->course = $request->course;
        $time->day = $request->day;
        $time->hall = $request->hall;
        $time->time = $request->time;
        $table = $time->save();
        if($table){
            return back()->with('success', 'TimeTable Created Successfully');
        }else{
            return back()->with('fail','Could not Create Timetable. please Try again!!');
        }


    }

    function addExam(Request $request){
        $request->validate([
            'program'=>'required',
            'special'=>'required',
            'course'=>'required',
            'day'=>'required',
            'hall'=>'required',
            'time'=>'required'
        ]);

        $exams = new exam();
        $exams->program = $request->program;
        $exams->special = $request->special;
        $exams->course = $request->course;
        $exams->day = $request->day;
        $exams->hall = $request->hall;
        $exams->time = $request->time;
        $table = $exams->save();
        if($table){
            return back()->with('success', 'Exam TimeTable Created Successfully');
        }else{
            return back()->with('fail','Could not Create Exam Timetable. please Try again!!');
        }
    }






}
