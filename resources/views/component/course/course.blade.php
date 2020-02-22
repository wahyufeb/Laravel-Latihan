@extends("layouts.master")
@section("title")
Course Page
@endsection
{{-- Contents --}}
@section("contents")
<h3>
    Hallo dari Course 🐠
</h3>
<div>
    <a href={{route("course.create")}} class="btn btn-success">Add Course</a>
</div>
<br>
<div class="row">    
    @foreach($course as $items)
    <div class="col-md-4" style="margin-bottom:20px;">
        <div class="card" style="width: 18rem;">
            <img src={{url('/images/'.$items->banner)}} class="card-img-top" alt={{$items->title}} height="200">
            <div class="card-body">
              <h5 class="card-title">{{$items->title}}</h5>
              <div class="card-bottom">
                  <h5>
                    @if ($items->price == 0)
                        <p style="color:green">FREE</p>
                    @else
                        $ {{$items->price}}
                    @endif
                  </h5>
                  Duration : {{$items->duration}} minutes
              </div>
              <a href="#" class="btn btn-info" style="width:100%;">Enroll</a>
            </div>
          </div>
    </div>
@endforeach
</div>

@endsection