@extends('layouts.base')

@section('pageTitle','Create Comic')

@section('content')
    <div class="container mt-5">
      <h1 class="text-center">Add Comic</h1>
      <form action="{{route('comics.store')}}" method="post">
        @csrf
        <div class="row mb-3">
          <label for="thumb" class="col-sm-2 col-form-label">Thumbnail:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="thumb" placeholder="Add Thumbnail Comic">
          </div>
        </div>
        <div class="row mb-3">
          <label for="title" class="col-sm-2 col-form-label">Title:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="title" placeholder="Add Title">
          </div>
        </div>
        <div class="row mb-3">
          <label for="price" class="col-sm-2 col-form-label">Price:</label>
          <div class="col-sm-10">
            <input type="number" class="form-control" name="price" placeholder="Add price">
          </div>
        </div>
        <div class="row mb-3">
          <label for="type" class="col-sm-2 col-form-label">Type:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="type" placeholder="Add type of comic">
          </div>
        </div>
        <div class="row mb-3">
          <label for="series" class="col-sm-2 col-form-label">Series:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="series" placeholder="Add Series">
          </div>
        </div>
        <div class="row mb-3">
          <label for="description" class="col-sm-2 col-form-label">Description:</label>
          <div class="col-sm-10">
            <textarea class="form-control" name="description" placeholder="Add Series"></textarea>
          </div>
        </div>
        <div class="row mb-3">
          <label for="sale_date" class="col-sm-2 col-form-label">Sale Date:</label>
          <div class="col-sm-10">
            <input type="date" class="form-control" name="sale_date" placeholder="Add Sale Date">
          </div>
        </div>
        <div class="button text-center">
          <button class="mr-2" type="submit">Create</button>
          <a href="{{route('comics.index')}}"><button class="mr-2" type="submit">Back</button></a>
        </div>
      </form>
    </div>
@endsection

