@extends("layouts.master")
@section("title")
Article Page
@endsection
{{-- Contents --}}
@section("contents")
<h3>
    Hallo dari Article
</h3>
<a href={{route("article.create")}}>
    <button class="btn btn-info" style="width:100%">Create Article</button>
</a>
<br>
<br>
<div class="row">
    @foreach ($articles as $article)
    <div class="col-md-3">
        <div class="card mb-3">
            <div class="card-body">
                <h6><a href={{route("article.show", $article)}}>{{$article->title}}</a></h6>
                <p>{{$article->created_at->diffForHumans()}}</p>
            </div>
        </div>
    </div>
    @endforeach
</div>

@endsection