@extends('master')

@section('content')

<div class="container">

    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="panel-title">
                <i class="glyphicon glyphicon-wrench pull-right"></i>
                <h4>Create New Department</h4>
            </div>
        </div>
        @foreach($errors->all('<li class="error">:message</li>') as $message)
                {{ $message }}
        @endforeach
        <div class="panel-body">
            {{ Form::open(['route' => 'departments.store']) }}
            {{ FormField::name(['label'=>'Department Name']) }}
            {{ FormField::description() }}
            {{ FormField::university() }}
            {{ Form::submit('Add Department',['class' => 'btn btn-primary']) }}

        </div><!--/panel content-->
    </div><!--/panel-->
</div>
@stop