@extends('master')

@section('content')

<div class="container">
    <table class="table table-striped table-bordered">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>E-Mail</th>
            <th>Details</th>
            <th>Department</th>

        </tr>
        </thead>
        <tbody>
        @foreach($hods as $hod)
        <tr>
            <td>{{ $hod->id }}</td>
            <td>{{ $hod->name }}</td>
            <td>{{ $hod->email }}</td>
            <td>{{ $hod->details }}</td>
            <td>{{ $hod->department['name'] }}</td>
            <td><a href="#" class="btn btn-info">View</a></td>
            <td><a href="#" class="btn btn-danger">Edit</a></td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>
@stop