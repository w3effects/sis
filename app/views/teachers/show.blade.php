@extends('master')

@section('content')


<!-- Main -->
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <!-- Left column -->
            <br/><br/>

            <ul class="nav nav-pills nav-stacked">
                <li class="nav-header"></li>
                <li><a href="#"><i class="fa fa-list"></i> Layouts &amp; Templates</a></li>
                <li><a href="{{ URL::route('departments.index') }}"><i class="fa fa-briefcase"></i> View Departments</a></li>
                <li><a href="{{ URL::route('hods.index') }}"><i class="fa fa-link"></i> View HOD's</a></li>
                <li><a href="#"><i class="fa fa-list-alt"></i> Reports</a></li>
                <li><a href="#"><i class="fa fa-book"></i> Pages</a></li>
                <li><a href="#"><i class="fa fa-star"></i> Social Media</a></li>
            </ul>

            <hr>

        </div><!-- /col-3 -->
        <div class="col-md-9">

            <!-- column 2 -->
            <ul class="list-inline pull-right">
                <li><a href="#"><i class="fa fa-cog"></i></a></li>
                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-comment"></i><span class="count">3</span></a><ul class="dropdown-menu" role="menu"><li><a href="#">1. Is there a way..</a></li><li><a href="#">2. Hello, admin. I would..</a></li><li><a href="#"><strong>All messages</strong></a></li></ul></li>
                <li><a href="#"><i class="fa fa-user"></i>Welcome {{ $teacher->name}}</a></li>
                <li><a  href="{{ URL::to('logout') }}"><span class="fa fa-sign-out"></span>Logout</a></li>
            </ul>
            <a href="#"><strong><i class="fa fa-dashboard"></i> My Dashboard</strong></a>

            <hr>

            <div class="row">



                <!-- center left-->
                <div class="col-md-6">

                    <h4>Your Department : {{ $teacher->department->name }}</h4>
                    <h4>Your Subject {{ $teacher->subject->name }} of  {{ Semister::find($teacher->subject->semisters_id)->name; }} semister </h4>
                    <br>
                    <ul class="nav nav-pills">
                        <li><a href="{{ URL::route('subjects.create') }} ">Add Attendence</a></li>

                    </ul>

                </div><!--/col-span-6-->

            </div><!--/row-->


        </div><!--/col-span-9-->
    </div>
</div>
<!-- /Main -->




@stop