@extends('welcome')
@section('content')

<div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">

        <a href=" {{route('addcategory')}} " class="btn btn-success">Add Category</a>
        <a href=" {{route('allcategory')}} " class="btn btn-info">All Category</a>
        <a href=" {{route('allpost')}} " class="btn btn-warning">All Post</a>
        <hr>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action=" {{url('update-post/'.$post->id)}} " method="post" enctype="multipart/form-data">
            @csrf
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Post Title</label>
              <input type="text" class="form-control" id="name" name="title" value="{{$post->title}}" required>
              <p class="help-block text-danger"></p>
            </div>
          </div><br>

          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Post Category</label>
              <select class="form-control" name="category_id"  >
                  @foreach($category as $row)
                  <option value="{{$row->id}}" <?php if($row->id == $post->category_id) echo "selected"; ?> >
                    {{$row->name}} </option>
                  @endforeach
              </select>

            </div>
          </div>

          <div class="control-group">
            <div class="form-group col-xs-12">
              <label>Post Image</label>
              <input type="file" class="form-control" name="image"> <hr>
              Old Image: <img src="{{URL::to($post->image)}}" style="width: 80px; height: 50px; ">
              <input type="hidden" name="old_photo" value=" {{ $post->image }} ">
            </div>
          </div>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Post Details</label>
              <textarea rows="5" class="form-control" placeholder="Post Details" name="details" required>
                  {{$post->details}}
              </textarea>
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <br>
          <div id="success"></div>
          <button type="submit" class="btn btn-primary" id="sendMessageButton">Update</button>
          <button type="reset" class="btn btn-primary">Clear</button>
        </form>
      </div>
    </div>
  </div>

@endsection
