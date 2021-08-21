@extends('layout')

@section('content')
<div class="container">
    <h2 align="center">Add image</h2>
    <div class="row">
        <div class="col-md-6 form-position">
            <img  src="/laravel-gallery/public/{{ $imageInView->image }}" alt="" class="img-fluid img-thumbnail gallery-image">
            <form action="/laravel-gallery/public/update/{{ $imageInView->id }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-control">
                    <input type="file" name="image">
                </div>
                <button type="submit" class="btn btn-warning my-button">Edit</button>
            </form>    
        </div>
    </div>
</div>      
@endsection