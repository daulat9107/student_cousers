@extends('layouts.admin')
@section('breadcrumb')
    <section class="content-header">
      <h1>
        Course Wise Number of Students
       
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('/admin/dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Students</li>
      </ol>
    </section>
    @endsection
@section('content')


     <table class="table">
    <thead>
      <tr>
        <th>Course Name</th>
        <th>Number Of Students</th>

      </tr>
    </thead>
    <tbody>
      @foreach($course_wise_number_of_students as $course_wise_number_of_student)
      <tr>
        <td>{{ $course_wise_number_of_student->name }}</td>
        <td>{{ $course_wise_number_of_student->user_count }}</td>
      </tr>
     @endforeach
    </tbody>
  </table>

  

    @endsection