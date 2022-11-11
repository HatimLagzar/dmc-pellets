@extends('layouts.admin')
 
@section('content')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Submissions</h1>
</div>

<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Email</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Message</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($submissions as $item)
            <tr>
                <td scope="row"><a href="/submissions/{{ $item->id }}">{{ $item->id }}</a></td>
                <td>{{ $item->email }}</td>
                <td>{{ $item->firstname }}</td>
                <td>{{ $item->lastname }}</td>
                <td>{{ $item->message }}</td>
            </tr>
        @endforeach
    </tbody>
</table>

{{ $submissions->links() }}
@endsection