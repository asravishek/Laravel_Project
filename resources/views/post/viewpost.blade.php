@extends('welcome')
@section('content')

<div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">

        <a href="{{route('post')}}" class="btn btn-info">Write Post</a>
        <a href=" {{route('allpost')}} " class="btn btn-warning">All Post</a>

        <hr>

        <div>
                <h3>Title: {{$post->title}} </h3>
                <img src=" {{url($post->image)}} " height="270px" class="img-fluid mx-auto rounded">
                <p><strong>Category Name:</strong> {{$post->name}} </p>
                <p class="text-justify"> <strong>Details:</strong> {{$post->details}} </p>
        </div>



      </div>
    </div>
  </div>

@endsection
