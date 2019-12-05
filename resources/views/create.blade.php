@extends('layouts.app')

@section('content')
  

  <h1 class="text-center">Create new student</h1>

  <form class="form-horizontal" action="{{ route('store') }}" method="post">

    {{ csrf_field() }}
    <div class="form-group">
        <label class="control-label col-sm-2" for="name">Name: </label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="name" id="name" placeholder="Name"/>
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-2" for="reg_id">Registration Id: </label>
        <div class="col-sm-10">
          <input type="number" class="form-control" name="reg_id" id="reg_id" placeholder="Registration Id"/>
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-2" for="dept">Department Name: </label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="dept" id="dept" placeholder="Department Name"/>
        </div>
    </div>

  <div class="form-group">
        <label class="control-label col-sm-2" for="info">Info: </label>
        <div class="col-sm-10">
          <textarea rows="10" class="form-control" name="info" id="info"></textarea>
        </div>
    </div>

    <div class="form-group">
      <div class="col-sm-offset-2 com-sm-10">
          <button type="submit" class="btn btn-primary">Register Student</button>
      </div>
    </div>
  </form>

@endsection