@extends('welcome')
@section('content')

<div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 mx-auto">
        <a href="{{route('post')}}" class="btn btn-info">Write Post</a>
        <hr>
        <div class="table-responsive">
            <table class="table table-bordered table-dark table-hover">
                <tr class="text-center">
                    <th>SL</th>
                    <th>Category</th>
                    <th>Post Title</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
                @php
                    $i=1;
                @endphp

                @foreach($post as $row)
                <tr class="text-center">
                    <td> {{$i++}} </td>
                    <td> {{$row->name}} </td>
                    <td> {{$row->title}} </td>
                    <td> <img src=" {{URL::to($row->image)}}" style="width:70px; height:50px;" alt=""></td>
                    <td>
                        <div class="btn-group">
                            <a href=" {{URL::to('edit-post/'.$row->id)}} " class="btn btn-sm btn-warning" title="Edit"><i class="fas fa-user-edit"></i></a>
                            <a href=" {{URL::to('view-post/'.$row->id)}} " class="btn btn-sm btn-success" title="View"><i class="fas fa-eye"></i></a>
                            <a href=" {{URL::to('delete-post/'.$row->id)}} " class="btn btn-sm btn-danger" title="Delete" id="delete"><i class="fas fa-trash-alt"></i></a>
                        </div>
                    </td>
                </tr>
                @endforeach

            </table>

        </div>
      </div>
    </div>
  </div>

@endsection
