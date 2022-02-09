@extends('layouts.base');

@section('pageContent')
    <h3 class="p-2">{{$comics->title}}</h3>
    <img src="{{asset("$comics->thumb")}}" alt="{{$comics->title}}" class="img-thumbnail">
    <p class="mt-3 mb-3">{{$comics->description}}</p>
    <div>
        <a href="{{route("comic-books.index")}}">
            <button type="button" class="btn btn-danger">Back</button>
        </a>
    </div>
@endsection