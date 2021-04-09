@extends('layout.template')
@section('title', 'create trip')
@section('content')
    <h1>Add Trips</h1>
    <form method="POST" action="{{route('trips.insert')}}">
        @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Name</label>
          <input type="text" class="form-control" id="" name="name">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Origin</label>
            <input type="text" class="form-control" id="" name="origin">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Destiny</label>
          <input type="text" class="form-control" id="" name="destiny">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Cost</label>
          <input type="text" class="form-control" id="" name="cost">
        </div>
        
        <button type="submit" class="btn btn-info">Save</button>
        <a href="{{route('trips')}}" type="submit" class="btn btn-info ml-4">Back</a>
    </form>
@endsection