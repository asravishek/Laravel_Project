@extends('welcome')
@section('content')

<div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 mx-auto">

        <a href=" {{route('addcategory')}} " class="btn btn-success">Add Category</a>
        <a href=" {{route('allcategory')}}" class="btn btn-info">All Category</a>
        <hr>
        <div class="table-responsive">
            <table class="table table-bordered table-dark table-hover">
                <tr class="text-center">
                    <th>SL</th>
                    <th>Category Name</th>
                    <th>Category Slug</th>
                    <th>Created At</th>
                    <th>Action</th>
                </tr>
                @php
                    $i=1;
                @endphp

                @foreach($category as $row)
                <tr class="text-center">
                    <td> {{$i++}} </td>
                    <td> {{$row->name}} </td>
                    <td> {{$row->slug}} </td>
                    <td> {{$row->created_at}} </td>
                    <td>
                        <div class="btn-group">
                            <a href=" {{URL::to('edit-category/'.$row->id)}} " class="btn btn-sm btn-warning" title="Edit"><i class="fas fa-user-edit"></i></a>
                            <a href=" {{URL::to('view-category/'.$row->id)}} " class="btn btn-sm btn-success" title="View"><i class="fas fa-eye"></i></a>
                            <a href=" {{URL::to('delete-category/'.$row->id)}} " class="btn btn-sm btn-danger" title="Delete" id="delete"><i class="fas fa-trash-alt"></i></a>
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
