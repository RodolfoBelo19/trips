@extends('layout.template')
@section('title', 'trips')
@section('content')
    


    <div class="container">

      <a href="{{route('trips.create')}}" type="button" class="btn btn-info mt-4 mb-4">Add trips</a>
        <div class="card shadow mb-4">

            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Origin</th>
                      <th>Destiny</th>
                      <th>Cost</th>
                      <th>Action</th>
                    </tr>
                  </thead>
            
                  <tbody>
                    @foreach ($trips as $trip)
                    <tr>
                      <td>{{$trip->name}}</td>
                      <td>{{$trip->origin}}</td>
                      <td>{{$trip->destiny}}</td>
                      <td>{{$trip->cost}}</td>
                      <td>
                        <a href="{{route('trips.show', $trip->id)}}"><i class="fas fa-eye text-primary" title="Details"></i></a>
                        <a href="{{route('trips.edit', $trip)}}"><i class="fas fa-edit text-info" title="To edit"></i></a>
                        <a href="#"><i class="fas fa-trash text-danger" title="Delete"></i></a>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
              </table>
            </div>
            </div>
            </div>
    </div>

    
@endsection