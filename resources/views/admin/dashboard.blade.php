@extends('layouts.admin')
@section('breadcrumb')
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>
  @endsection
@section('content')


      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>{{ $users_count }}</h3>

              <p>Number of Users(Other than Admin)</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
          
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>{{ $courses_count }}</h3>

              <p>Number of Courses</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
          
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              
				<h3>&nbsp;</h3>
              <p><a href="/admin/students" class="small-box-footer">Course Wise Number of Students</a></p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            
          </div>
        </div>

      </div>
      <!-- /.row -->
      <!-- Main row -->
    
      <!-- /.row (main row) -->

  

    @endsection