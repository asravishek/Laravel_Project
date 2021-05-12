@extends('welcome')
@section('content')

<div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">

        <a href=" {{route('student')}} " class="btn btn-success">Add Student</a>
        <a href="{{route('allstudent')}}" class="btn btn-info">All Student</a>
        <hr>

        <div>
            <ul>
                <li>Student Name: {{$student->name}} </li>
                <li>Student Email: {{$student->email}} </li>
                <li>Student Phone: {{$student->phone}} </li>
                <li>Student At: {{$student->created_at}} </li>
            </ul>
        </div>



      </div>
    </div>
  </div>

@endsection
