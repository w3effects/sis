@extends('master')

@section('content')

<div class="container">

    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="panel-title">
                <i class="glyphicon glyphicon-wrench pull-right"></i>
                <h4>Create New HOD</h4>
            </div>
        </div>
        @include('partials/errors')
        <div class="panel-body">
            {{ Form::open(['route' => 'hods.store']) }}
            {{ FormField::name(['label'=>'Hod Name']) }}
            {{ FormField::details(['type' => 'textarea']) }}
            <div class="form-group">

                {{ Form::label('department','Department',['class'=>'control-label']) }}
                {{ Form::select('departments_id', $departments,null,['class'=>'form-control']) }}
            </div>
            {{ FormField::email(['label' =>'Username / E-mail']) }}
            {{ FormField::password() }}
            {{ Form::submit('Add Department',['class' => 'btn btn-primary']) }}

        </div><!--/panel content-->
    </div><!--/panel-->
</div>
@stop