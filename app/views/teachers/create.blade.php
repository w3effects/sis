@extends('master')

@section('content')

<div class="container">

    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="panel-title">
                <i class="glyphicon glyphicon-wrench pull-right"></i>
                <h4>Create New Teacher</h4>
            </div>
        </div>
        @include('partials/errors')
        <div class="panel-body">
            {{ Form::open(['route' => 'teachers.store']) }}
            {{ FormField::name(['label'=>'Teacher Name']) }}
            {{ FormField::details(['type' => 'textarea']) }}
            {{ FormField::email(['label' =>'Username / E-mail']) }}
            {{ FormField::password() }}
            {{ Form::hidden('departments_id',Hod::find(Auth::user()->id)->department->id )}}
            {{ Form::submit('Add Teacher',['class' => 'btn btn-primary']) }}


        </div><!--/panel content-->
    </div><!--/panel-->
</div>
@stop