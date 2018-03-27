<?php

namespace Inurture\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inurture\Course;
use Inurture\Http\Controllers\Controller;
use Inurture\User;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','admin.auth']);
    }
    public function index(){
        $users_count= User::where('group_id','!=','2')->count();
        $courses_count= Course::count();
       
        
        return view('admin.dashboard')
        ->with(compact('users_count'))
        ->with(compact('courses_count'));

    }
    public function courseWiseNumberOfStudents(){
         $course_wise_number_of_students=DB::select(' select name,count(user_id) as user_count from (select name,user_id from courses group by name,user_id) as cd group by name order by user_count desc');
               return view('admin.students')
        ->with(compact('course_wise_number_of_students'));
    }


}
