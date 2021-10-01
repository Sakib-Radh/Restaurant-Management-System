@extends('layout')

@section('content')
<div class="col-sm-6">
<form method="POST" action="">
@csrf
  <div class="form-group">
    <label>Name</label>
    <input type="text" name="name" class="form-control"  placeholder="Enter Name">

  </div>


  <div class="form-group">
    <label>Email address</label>
    <input type="email" name="email" class="form-control"  placeholder="Enter email">

  </div>


  <div class="form-group">
    <label for="exampleInputPassword1">Address</label>
    <input type="text" name="address" class="form-control"  placeholder="Address">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@stop
