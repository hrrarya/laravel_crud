@extends('layouts.app')

@section('content')
  <table class="table">
      <tr>
          <th>#</th>
          <th>Name</th>
          <th>Registration</th>
          <th>Department</th>
          <th>Info</th>
          <th>Action</th>
      </tr>
      @php $i= 0; @endphp
      @foreach ($students as $student)
      @php $i++ @endphp
        <tr>
          <td>{{$i}}</td>
          <td>{{$student->name}}</td>
          <td>{{$student->registration_id}}</td>
          <td>{{$student->department_name}}</td>
          <td>{{$student->info}}</td>
          <td>
            <a href="/edit/{{$student->id}}" class="btn btn-success btn-sm mb-3">Edit</a>
            
            <form class="form-inline" action="{{route('delete', $student->id)}}" method="post">
            {{ csrf_field() }}
              <input type="submit" value="Delete" class="btn btn-danger btn-sm"/>
            </form>
            
          </td>
        </tr>
      @endforeach
      
  </table>

@endsection