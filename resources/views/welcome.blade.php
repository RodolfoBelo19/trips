@extends('layout.template')
@section('title', 'home')
@section('content')
            
    <div class="container">

        <div class="content" style="display: flex; width:100%; justify-content: space-evenly">
            <div class="content-a" style="margin: auto 0">
                <a href="{{route('trips')}}" type="button" class="btn btn-info mt-4 mb-4" style="max-height: 30%;">Buy the trip of your dreams</a>
            </div>
            <img src="https://i.pinimg.com/originals/99/0c/9a/990c9a5cda6b3ab91bc599b4f85bb41f.png" width="50%" alt="">
        </div>
         
    </div>   
    
@endsection