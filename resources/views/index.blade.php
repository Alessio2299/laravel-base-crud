@extends('layouts.base')

@section('pageTitle')
    All Comics
@endsection

@section('content')
    <div class="container-fluid">
        <div class="d-flex justify-content-around align-items-center">
            <h1 class="text-center">All Comics</h1>
            <a href="{{route('comics.create')}}"><button>Add Comic</button></a>
        </div>
        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Image</th>
                <th>Title</th>
                <th>Description</th>
                <th>Price</th>
                <th>Type</th>
                <th>Series</th>
                <th>Sale Date</th>
                <th>View</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($comics as $comic)
                    <tr>
                        <th scope="row">{{$comic->id}}</th>
                        <td><img class="my_width" src="{{$comic->thumb}}" alt="{{$comic->title}}"></td>
                        <td>{{$comic->title}}</td>
                        <td>{{$comic->description}}</td>
                        <td>{{$comic->price}} €</td>
                        <td>{{$comic->type}}</td>
                        <td>{{$comic->series}}</td>
                        <td>{{$comic->sale_date}}</td>
                        <td class="text-center"><a href="{{route('comics.show', $comic->id)}}"><i class="fas fa-search"></i></a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection