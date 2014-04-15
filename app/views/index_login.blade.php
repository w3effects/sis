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
            <div class="loginindexcontent">
                <h3>Login As </h3><br/><br/>
                <div class="btn-group">
                    <a href="principals/login" class="btn btn-default">Principal</a>
                    <a href="hods/login" class="btn btn-default">Hod</a>
                    <a href="teachers/login" class="btn btn-default">Teacher</a>
                    <a href="students/login" class="btn btn-default">Student</a>
                </div>
            </div>
        </div>
    </div>
</div>

@stop