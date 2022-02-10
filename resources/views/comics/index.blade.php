@extends('layouts.base')

@section('pageTitle')
    DC | Welcome
@endsection

@section('pageContent')
<h1 class="text-center">Latest Releases</h1>

<p>To insert a new record click the button below</p>
<div class="mt-3 mb-3">
  <a href="{{route("comics.create")}}">
    <button type="button" class="btn btn-info">Add new record</button>
  </a>
</div>

<table class="table">
    <thead>
      <tr>
        <th scope="col">Title</th>
        <th scope="col">Genre</th>
        <th scope="col">Price</th>
        <th scope="col">More Info</th>
        <th scope="col">Change settings</th>
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
                    <button type="button" class="btn btn-primary">Open</button>
                </a>
            </td>
            <td>
              <a href="{{route("comics.edit", $comic->id)}}">
                  <button type="button" class="btn btn-warning">Modify</button>
              </a>
          </td>
          </tr>
        @endforeach 
    </tbody>
  </table>
@endsection
