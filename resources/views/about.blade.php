@extends("layouts.master")
@section("title")
About Page
@endsection
{{-- Contents --}}
@section("contents")
<h3>
     About Developers
</h3>
<ul>
    @foreach($names as $name)
        <li>{{$name}}</li>
    @endforeach
</ul>
@endsection