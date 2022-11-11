@extends('layouts.admin')
 
@section('content')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Submission ID: {{ $submission->id }}</h1>
</div>

<table class="table">
    <tbody>
            <tr>
                <th scope="col">Email</th>
                <td>{{ $submission->email }}</td>
            </tr>
            <tr>
                <th scope="col">First Name</th>
                <td>{{ $submission->firstname }}</td>
            </tr>
            <tr>
                <th scope="col">Last Name</th>
                <td>{{ $submission->lastname }}</td>
            </tr>
            <tr>
                <th scope="col">Message</th>
                <td>{{ $submission->message }}</td>
            </tr>
    </tbody>
</table>

@endsection