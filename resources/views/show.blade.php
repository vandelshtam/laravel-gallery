@extends('layout')

@section('content')
<div class="container">
    <h2 align="center">Show</h2>
    <div class="row">
        <div class="coll-md-12">
            
            <img  src="/laravel-gallery/public/{{ $imageInView }}" alt="" class="img-fluid img-thumbnail gallery-image">
        </div>

    </div>
</div>     
@endsection