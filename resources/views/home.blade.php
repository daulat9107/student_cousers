@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
<a href="/courses/view" target="_blank">View Courses</a>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>#</th>
        <th>Course Id</th>
        <th>Course Name</th>
        <th>Course Type</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
@foreach($courses as $key=> $course)
      <tr>
        <td>{{ $key+1 }}</td>
        <td class="course_id">{{ $course['id'] }}</td>
        <td class="course_name">{{ $course['name'] }}</td>
        <td class="course_type">{{ $course['courseType'] }}</td>
        <td><a href="#" class="save">Save</a></td>
      </tr>
    
@endforeach
    </tbody>
  </table>
               

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
