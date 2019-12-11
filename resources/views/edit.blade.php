@extends('layouts.app')
@section('title')
  Edit Student | Student Directory
@endsection

@section('content')
  

  <h1 class="text-center">Edit Student</h1>

  <form class="form-horizontal" action="{{ route('update', $student->id) }}" method="post" data-parsley-validate>

    {{ csrf_field() }}
    <div class="form-group">
        <label class="control-label col-sm-2" for="name">Name: </label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="name" id="name" placeholder="Name" value="{{$student->name}}" data-parsley-length="[3,10]" required/>
        </div>
    </div>
    
    <div class="form-group">
        <label class="control-label col-sm-2" for="reg_id">Registration Id: </label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="reg_id" id="reg_id" placeholder="Registration Id" value="{{$student->registration_id}}" data-parsley-type="number" required/>
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-2" for="dept">Department Name: </label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="dept" id="dept" placeholder="Department Name" value="{{$student->department_name}}" required/>
        </div>
    </div>

  <div class="form-group">
        <label class="control-label col-sm-2" for="info">Info: </label>
        <div class="col-sm-10">
          <textarea rows="10" class="form-control" name="info" id="info">{{$student->info}}</textarea>
        </div>
    </div>

    <div class="form-group">
      <div class="col-sm-offset-2 com-sm-10">
          <button type="submit" class="btn btn-primary">Update Student</button>
      </div>
    </div>
  </form>

@endsection