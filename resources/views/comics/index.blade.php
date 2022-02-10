@extends('layouts.base');

@section('pageTitle')
    DC | Welcome
@endsection

@section('pageContent')
<h1 class="text-center">Latest Releases</h1>

<table class="table">
    <thead>
      <tr>
        <th scope="col">Title</th>
        <th scope="col">Genre</th>
        <th scope="col">Price</th>
        <th scope="col">More Info</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($comics as $comic)
        <tr>
            <td>{{$comic->title}}</td>
            <td>{{$comic->type}}</td>
            <td>$ {{$comic->price}}</td>
            <td>
                <a href="{{route("comics.show", $comic->id)}}">
                    <button type="button" class="btn btn-danger">Open</button>
                </a>
            </td>
          </tr>
        @endforeach 
    </tbody>
  </table>
@endsection
