@extends('layouts.master')

@section("title")
Create Course Now
@endsection()

@section("contents")
<h3>Hallo from Create Course 🐡 </h3>
<hr>
@if ($message = Session::get('sukses'))
	<div class="alert alert-success alert-block">
	<button type="button" class="close" data-dismiss="alert">×</button> 
	{{ $message }}
	</div>
@endif
@if ($message = Session::get('gagal'))
	<div class="alert alert-warning alert-block">
	<button type="button" class="close" data-dismiss="alert">×</button> 
	{{ $message }}
	</div>
@endif

    <div class="row">
        <div class="col-lg-8">
            <form action={{route("course.create")}} method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" class="form-control @error("title") is-invalid @enderror()">
                   {!! $errors->first('title', '<span class="invalid-feedback">:message</span>')  !!}
                </div>
                <div class="form-group">
                    <label for="banner">Thumbnail</label><br>
                    <input type="file" name="banner" id="banner" class="form-control @error("title") is-invalid @enderror()">
                    {!! $errors->first('banner', '<span class="invalid-feedback">:message</span>')  !!}
                </div>
                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="duration">Duration</label>
                        <input type="number" name="duration" id="duration" class="form-control @error("duration") is-invalid @enderror()">
                       {!! $errors->first('duration', '<span class="invalid-feedback">:message</span>')  !!}
                    </div>
                    <div class="form-group col-8">
                        <label for="price">Price</label>
                        <input type="number" name="price" id="price" class="form-control @error("price") is-invalid @enderror()">
                       {!! $errors->first('price', '<span class="invalid-feedback">:message</span>')  !!}
                    </div>
                </div>
                <button type="submit" class="btn btn-success" style="width:100%">Create Course</button>
            </form>
        </div>
    </div>

@endsection()