@extends('master')


@section('content')

<div class=" col-md-offset-1" style="margin-top: 10%">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Please sign in</h3>
                </div>
                <div class="panel-body">
                    {{ Form::open(['action'=>'PrincipalsController@login'])}}
                        <fieldset>
                            <div class="form-group">
                                {{ Form::email('email',null,['class' => 'form-control','placeholder' => 'E-mail','required']) }}
                            </div>
                            <div class="form-group">
                                {{ Form::password('password',['class' => 'form-control','placeholder' => 'Password','required']) }}
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input name="remember" type="checkbox" value="Remember Me"> Remember Me
                                </label>
                            </div>
                            <input class="btn btn-lg btn-success btn-block" type="submit" value="Login">
                        </fieldset>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@stop