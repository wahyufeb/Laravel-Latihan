@extends('layouts.master')

@section("title")
Edit Article Now
@endsection()

@section("contents")
<h3>Hallo from Edit Article 🙊</h3>
<hr>
    <div class="row">
        <div class="col-lg-8">
            <form action={{route("article.update", $article)}} method="post">
                @csrf
            <p></p>
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" value="{{$article->title}}"class="form-control @error("title") is-invalid @enderror()">
                   {!! $errors->first('title', '<span class="invalid-feedback">:message</span>')  !!}

                </div>
                <div class="form-group">
                    <label for="contents">Contents</label>
                    <textarea type="text" name="contents" id="contents" class="form-control @error("contents") is-invalid @enderror()" rows="10">
                        {{$article->contents}}
                    </textarea>
                    {!! $errors->first('contents', '<span class="invalid-feedback">:message</span>')  !!}

                </div>
                <button type="submit" class="btn btn-dark" style="width:100%">Update Now</button>
            </form>
        </div>
    </div>

@endsection()