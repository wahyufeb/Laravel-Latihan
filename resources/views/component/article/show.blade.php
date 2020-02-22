@extends("layouts.master")
@section("title")
Show Article
@endsection()

@section("contents")
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <h3>{{$article->title}}</h3>
                <p>
                    {{$article->contents}}
                </p>
                <div><a class="btn btn-warning" href={{route("article.edit", $article)}}>Edit</a></div>
            </div>
        </div>
    </div>
@endsection()