@extends('layout.template')
@section('title', 'edit trip')
@section('content')
    <h1>Edit Trips</h1>
    <form method="POST" action="{{route('trips.editTrip', $trip)}}">
        @csrf
        @method('put')
        <div class="form-group">
          <label for="exampleInputEmail1">Name</label>
          <input type="text" class="form-control" id="" name="name" value="{{$trip->name}}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Origin</label>
            <input type="text" class="form-control" id="" name="origin" value="{{$trip->origin}}">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Destiny</label>
          <input type="text" class="form-control" id="" name="destiny" value="{{$trip->destiny}}">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Cost</label>
          <input type="text" class="form-control" id="" name="cost" value="{{$trip->cost}}">
        </div>
        <button type="submit" class="btn btn-info">Save</button>
        <a href="{{route('trips')}}" type="submit" class="btn btn-info ml-4">Back</a>
    </form>
@endsection