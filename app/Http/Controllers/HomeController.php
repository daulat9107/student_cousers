<?php

namespace Inurture\Http\Controllers;

use Illuminate\Http\Request;
use Inurture\Course;
use Inurture\Services\Api\Contracts\ApiServiceInterface;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ApiServiceInterface $api,Course $db_courses)
    {
            $db_courses=$db_courses->get()->toArray();
        
          $api->connector('https://api.coursera.org/api/courses.v1');
          $courses=$api->parser();
          $new_courses=[];
        foreach ($courses as $key => $value) {
            
            foreach ($db_courses as $dbkey => $dbvalue) {
                if($dbvalue['course_id']!=$value['id']){
                    $new_courses[]=$value;
                }
            }
        }
        $courses=$new_courses;
          return view('home')->with(compact('courses'));
    }

}
