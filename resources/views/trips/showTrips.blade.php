@extends('layout.template')
@section('title', 'trips list')
@section('content')

<div class="jumbotron">
    <h1 class="display-4"><?php echo $trips->name ?></h1>
    <p class="lead">Travel of <?php echo $trips->origin ?> for <?php echo $trips->destiny ?>. </p>
    <hr class="my-4">
    <p>Good trip!</p>
    <a class="btn btn-info btn-lg" href="{{route('trips')}}" role="button">Back to trips</a>
  </div>
@endsection