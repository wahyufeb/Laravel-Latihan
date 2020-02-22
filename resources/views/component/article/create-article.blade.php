@extends('layouts.master')

@section("title")
Create Article Now
@endsection()

@section("contents")
<h3>Hallo from Create Article 🙈 </h3>
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
            <form action={{route("article.create")}} method="post">
                @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" class="form-control @error("title") is-invalid @enderror()">
                   {!! $errors->first('title', '<span class="invalid-feedback">:message</span>')  !!}

                </div>
                <div class="form-group">
                    <label for="contents">Contents</label>
                    <textarea type="text" name="contents" id="contents" class="form-control @error("contents") is-invalid @enderror()" rows="10">
                    </textarea>
                    {!! $errors->first('contents', '<span class="invalid-feedback">:message</span>')  !!}
                </div>
                <button type="submit" class="btn btn-dark" style="width:100%">Create Now</button>
            </form>
        </div>
    </div>

@endsection()