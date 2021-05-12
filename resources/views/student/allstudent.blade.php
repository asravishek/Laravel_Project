@extends('welcome')
@section('content')

<div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 mx-auto">

        <a href=" {{route('student')}} " class="btn btn-success">Add Student</a>
        <a href=" {{route('allstudent')}}" class="btn btn-info">All Student</a>
        <hr>
        <div class="table-responsive">
            <table class="table table-bordered table-dark table-hover">
                <tr class="text-center">
                    <th>SL</th>
                    <th>Student Name</th>
                    <th>Student Email</th>
                    <th>Student Phone</th>
                    <th>Action</th>
                </tr>
                @php
                 $i=1;
                @endphp

                @foreach($student as $row)
                <tr class="text-center">
                    <td> {{$i++}} </td>
                    <td> {{$row->name}} </td>
                    <td> {{$row->email}} </td>
                    <td> {{$row->phone}} </td>
                    <td>
                        <div class="btn-group">
                            <a href=" {{URL::to('edit-student/'.$row->id)}} " class="btn btn-sm btn-warning" title="Edit"><i class="fas fa-user-edit"></i></a>
                            <a href=" {{URL::to('view-student/'.$row->id)}} " class="btn btn-sm btn-success" title="View"><i class="fas fa-eye"></i></a>
                            <a href=" {{URL::to('delete-student/'.$row->id)}} " class="btn btn-sm btn-danger" title="Delete" id="delete"><i class="fas fa-trash-alt"></i></a>
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
