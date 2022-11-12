@extends('layouts.admin')
 
@section('content')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">App Images</h1>
</div>

<div class="row">
    <form method="post" action="{{ route('app-images.store') }}" enctype="multipart/form-data">
        @csrf
        @foreach($images as $image)
            <div class="row mb-3">
                <div class="col-3">
                    <img style="max-width: 100%;" src="/images/{{ $image->getFileName() }}" alt="">
                </div>
                <div class="col">
                    <p>File name: {{ $image->getFileName() }}</p>
                    <input type="file" name="{{ str_replace('.', '%40', str_replace(' ', '%20', $image->getFileName())) }}" accept="image/*">
                </div>
            </div>
        @endforeach
        <button class="btn btn-primary mb-5">Update</button>
    </form>
</div>

@endsection
