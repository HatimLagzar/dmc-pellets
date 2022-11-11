@extends('layouts.admin')
 
@section('content')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Inquiry ID: {{ $inquiry->id }}</h1>
</div>

<table class="table">
    <tbody>
            <tr>
                <th scope="col">Email</th>
                <td>{{ $inquiry->email }}</td>
            </tr>
            <tr>
                <th scope="col">First Name</th>
                <td>{{ $inquiry->firstname }}</td>
            </tr>
            <tr>
                <th scope="col">Last Name</th>
                <td>{{ $inquiry->lastname }}</td>
            </tr>
            <tr>
                <th scope="col">Address</th>
                <td>{{ $inquiry->address }}</td>
            </tr>
            <tr>
                <th scope="col">Zip</th>
                <td>{{ $inquiry->zip }}</td>
            </tr>
            <tr>
                <th scope="col">City</th>
                <td>{{ $inquiry->city }}</td>
            </tr>
            <tr>
                <th scope="col">Phone</th>
                <td>{{ $inquiry->phone }}</td>
            </tr>
            <tr>
                <th scope="col">Type</th>
                <td>{{ $inquiry->type }}</td>
            </tr>
            <tr>
                <th scope="col">Quantity</th>
                <td>{{ $inquiry->quantity }}</td>
            </tr>
            <tr>
                <th scope="col">Message</th>
                <td>{{ $inquiry->message }}</td>
            </tr>
    </tbody>
</table>

@endsection