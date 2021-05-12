@extends('welcome')
@section('content')

<div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">

        <a href=" {{route('addcategory')}} " class="btn btn-success">Add Category</a>
        <a href="{{route('allcategory')}}" class="btn btn-info">All Category</a>
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

        <form action=" {{route('storecategory')}} " method="post">
            @csrf
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Category Name</label>
              <input type="text" class="form-control" placeholder="Category name" name="name">
              <p class="help-block text-danger"></p>
            </div>
          </div><br>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Category Slug</label>
              <input type="text" class="form-control" placeholder="Category Slug" name="slug">
              <p class="help-block text-danger"></p>
            </div>
          </div><br>


          <button type="submit" class="btn btn-primary">Submit</button>
          <button type="reset" class="btn btn-primary">Clear</button>
        </form>
      </div>
    </div>
  </div>

@endsection
