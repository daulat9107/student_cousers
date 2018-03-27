<?php

namespace Inurture\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inurture\Course;

class CourseController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }
    public function store(Request $request, Course $course){
    	sleep(1);
    	$course->course_id=$request->id;
    	$course->user_id=Auth::user()->id;
    	$course->name=$request->name;
    	$course->type=$request->type;
    	$course->save();
    }
    public function view(){
          $db_courses=auth()->user()->courses()->get()->toArray();
          
           return view('courses')->with(compact('db_courses'));
    }
}
