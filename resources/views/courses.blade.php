@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Saved Courses</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

  <table class="table table-striped">
    <thead>
      <tr>
        <th>#</th>
        <th>Course Id</th>
        <th>Course Name</th>
        <th>Course Type</th>
    
      </tr>
    </thead>
    <tbody>
@foreach($db_courses as $key=> $course)
      <tr>
        <td>{{ $key+1 }}</td>
        <td>{{ $course['course_id'] }}</td>
        <td>{{ $course['name'] }}</td>
        <td>{{ $course['type'] }}</td>

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
