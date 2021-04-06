@extends('layout.template')
@section('title', 'trips')
@section('content')
    <h1>Página de viagens</h1>

    <div class="container">
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
                    </tr>
                  </thead>
            
                  <tbody>
                    @foreach ($trips as $trip)
                    <tr>
                      <td>{{$trip->name}}</td>
                      <td>{{$trip->origin}}</td>
                      <td>{{$trip->destiny}}</td>
                      <td>{{$trip->cost}}</td>
                    </tr>
                    @endforeach
                  </tbody>
              </table>
            </div>
            </div>
            </div>
    </div>

@endsection