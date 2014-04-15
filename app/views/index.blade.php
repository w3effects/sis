@extends('master')

@section('content')

<style>
    .navbar{margin-bottom: 0px}
</style>
<div class="row homebanner">
    <div class="container">
        <div class="col-md-8 homecontent">
            <h3>Latest News In college </h3>


        </div>
        <div class="col-md-4">

                <div class="panel panel-default homelogin">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please sign in</h3>
                    </div>
                    <div class="panel-body">
                        {{ Form::open()}}
                        <fieldset>
                            {{ FormField::email(['placeholder' => 'E-mail' ]) }}
                            {{ FormField::password(['placeholder' => 'Password' ]) }}
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

@stop