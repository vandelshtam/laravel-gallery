@extends('layout')

@section('content')
<div class="container">
    <h2 align="center">Add image</h2>
    <div class="row">
        <div class="col-md-6 form-position">
            <form action="/laravel-gallery/public/store" method="POST" enctype="multipart/form-data">
                {{ csrf_field()}}
                <div class="form-control">
                    <input type="file" name="image">
                </div>
                <button type="submit" class="btn btn-success my-button">Create</button>
            </form>    
        </div>
    </div>
</div>  
@endsection