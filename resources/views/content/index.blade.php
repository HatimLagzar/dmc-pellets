@extends('layouts.admin')
 
@section('content')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Content</h1>
</div>

<div class="row">
    <p>Contacts Info</p>
    <form method="post" action="{{ route('content.store') }}">
        @csrf
        <div><textarea rows="10" name="contacts" cols="80">{!! data_get($contacts, 'html_data') !!}</textarea></div>
        <div>Dealer name: <input type="text" name="dealer_name" value="{{ data_get($dealer_name, 'html_data') }}" style="width:300px;"></div>
        <div class="py-2"><input type="submit" value="Save Contacts"></div>
    </form>
</div>

@endsection
