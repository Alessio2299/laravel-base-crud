@extends('layouts.base')

@section('pageTitle','Create Comic')

@section('content')
    <div class="container mt-5">
      <h1 class="text-center">Edit Comic</h1>
      <form action="{{route('comics.update',$comic->id)}}" method="post">
        @csrf
        @method('PUT')
        <div class="row mb-3">
          <label for="thumb" class="col-sm-2 col-form-label">Thumbnail:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="thumb" value="{{$comic->thumb}}">
          </div>
        </div>
        <div class="row mb-3">
          <label for="title" class="col-sm-2 col-form-label">Title:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="title" value="{{$comic->title}}">
          </div>
        </div>
        <div class="row mb-3">
          <label for="price" class="col-sm-2 col-form-label">Price:</label>
          <div class="col-sm-10">
            <input type="number" class="form-control" name="price" value="{{$comic->price}}">
          </div>
        </div>
        <div class="row mb-3">
          <label for="type" class="col-sm-2 col-form-label">Type:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="type" value="{{$comic->type}}">
          </div>
        </div>
        <div class="row mb-3">
          <label for="series" class="col-sm-2 col-form-label">Series:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="series" value="{{$comic->series}}">
          </div>
        </div>
        <div class="row mb-3">
          <label for="description" class="col-sm-2 col-form-label">Description:</label>
          <div class="col-sm-10">
            <textarea class="form-control" name="description">{{$comic->description}}</textarea>
          </div>
        </div>
        <div class="row mb-3">
          <label for="sale_date" class="col-sm-2 col-form-label">Sale Date:</label>
          <div class="col-sm-10">
            <input type="date" class="form-control" name="sale_date" value="{{$comic->sale_date}}">
          </div>
        </div>
        <div class="button text-center">
          <button class="mr-2" type="submit">Edit</button>
          <button type="submit">Delete</button>
        </div>
      </form>
    </div>
@endsection