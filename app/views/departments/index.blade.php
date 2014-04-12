@extends('master')

@section('content')

<div class="container">
    <table class="table table-striped table-bordered">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>University</th>
            <th>HOD</th>
        </tr>
        </thead>
        <tbody>
        @foreach($departments as $department)
        <tr>
            <td>{{ $department->id }}</td>
            <td>{{ $department->name }}</td>
            <td>{{ $department->description }}</td>
            <td>{{ $department->university }}</td>
            <td>{{ $department->hod['name'] }}</td>
            <td><a href="#" class="btn btn-info">View</a></td>
            <td><a href="#" class="btn btn-danger">Edit</a></td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>
@stop