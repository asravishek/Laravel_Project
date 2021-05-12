@extends('welcome')


@section('content')

<div class="row">
    <div class="col-lg-8 col-md-10 mx-auto">
        @foreach($post as $row)
      <div class="post-preview">
        <a href="{{URL::to('view-post/'.$row->id)}}">
          <h2 class="post-title">
            {{$row->title}}
          </h2>
          <h3 class="post-subtitle">
            <img src=" {{url($row->image)}} " style="width: 620px; height:320px;" class="rounded" >
          </h3>
        </a>
        <p class="post-meta">Category Name:
          <a href="#"> {{$row->name}} </a>
          on Slug: <b>{{$row->slug}}</b>  </p>
      </div>
      @endforeach



      <hr>
      <div class="clearfix">
        {{$post->links()}}
      </div>
    </div>
  </div>


@endsection
