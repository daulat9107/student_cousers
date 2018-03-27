<?php

namespace Inurture\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }
    public function store(Request $request){
    	sleep(3);
    	
    }
}
