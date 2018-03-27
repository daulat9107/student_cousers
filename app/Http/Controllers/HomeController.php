<?php

namespace Inurture\Http\Controllers;

use Illuminate\Http\Request;
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
    public function index(ApiServiceInterface $api)
    {
          $api->connector('https://api.coursera.org/api/courses.v1');
          $courses=$api->parser();
          return view('home')->with(compact('courses'));
    }
}
