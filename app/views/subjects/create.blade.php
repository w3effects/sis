@extends('master')

@section('content')
<div class="container">

    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="panel-title">
                <i class=""></i>
                <h4>Create New Subject</h4>
            </div>
        </div>
        @include('partials/errors')
        <div class="panel-body">
            {{ Form::open(['route' => 'subjects.store']) }}
            {{ FormField::name(['label'=>'Subject Name']) }}
            {{ FormField::details(['type' => 'textarea']) }}
            <div class="row">
                <div class="col-md-2">
                    {{ FormField::maximumMarks(['name'=>'max_marks'],100) }}
                </div>
                <div class="col-md-2">
                    {{ FormField::minimumMarks(['name'=>'min_marks'],35) }}
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">

                        {{ Form::label('teachers_id','Assigned Teacher',['class'=>'control-label']) }}
                        {{ Form::select('teachers_id', $teachers,null,['class'=>'form-control']) }}


                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">

                        {{ Form::label('semisters_id','Assigned Semister',['class'=>'control-label']) }}
                        {{ Form::select('semisters_id', $semisters,null,['class'=>'form-control']) }}


                    </div>
                </div>
            </div>

            {{ Form::submit('Add Subject',['class' => 'btn btn-primary']) }}

        </div><!--/panel content-->
    </div><!--/panel-->
</div>
@stop