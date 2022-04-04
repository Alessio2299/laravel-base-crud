@extends('layouts.base')

@section('pageTitle')
  {{$comic->series}}
@endsection

@section('content')
  <div class="card mb-3 mx-auto mt-5" style="max-width: 540px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="{{$comic->thumb}}" class="img-fluid rounded-start" alt="{{$comic->series}}">
      </div>  
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title">{{$comic->title}}</h5>
          <p class="card-text">{{$comic->description}}</p>
          <p class="card-text">Series : {{$comic->series}}</p>
          <p class="card-text">Type : {{$comic->type}}</p>
          <span class="d-inline-block mr-4 card-text"><small class="text-muted">{{$comic->sale_date}}</small></span>
          <span class="card-text"><small class="text-muted">{{$comic->price}} €</small></span>
        </div>
      </div>
    </div>
  </div>
  <div class="text-center d-flex justify-content-center">
    <a class="mr-2" href="{{route('comics.edit', $comic->id)}}"><button>Edit</button></a>
    <a class="mr-2" href="{{route('comics.index')}}"><button>Back</button></a>
    <form action="{{route('comics.destroy', ['comic' => $comic->id])}}" method="POST">
      @csrf
      @method('DELETE')
      <button class="mr-2" id="confirm" type="submit">Delete</button>
    </form>
  </div>
@endsection

@section('javascript')
  <script src="{{asset('js/myjavascript.js')}}"></script>   
@endsection