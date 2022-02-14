@extends('layouts.base')

@section('pageContent')
<h1>Modify the item: {{$comic->title}}</h1>
<form action="{{route("comics.update", $comic->id)}}" method="POST">
    @csrf
    @method("PUT")

    <div class="form-group">
      <label for="title">Comic Title</label>
      <input type="text" class="form-control" id="title" placeholder="Insert book title here" name="title" value="{{$comic->title}}">
    </div>

    <div class="form-group">
        <label for="description">Book Plot</label>
        <textarea class="form-control" id="description" rows="3" name="description" value="{{$comic->description}}"></textarea>
      </div>

    <div class="form-group">
        <label for="thumb">Book Cover</label>
        <input type="file" class="form-control-file" id="thumb" name="thumb" value="{{$comic->thumb}}">
    </div>

    <div class="form-group">
        <label for="price">Book Price</label>
        <input type="number" class="form-control" id="price" name="price" placeholder="Insert book price here" value="{{$comic->price}}">
    </div>

    <div class="form-group">
        <label for="series">Book Series</label>
        <input type="text" class="form-control" id="series" name="series" placeholder="Insert book series here" value="{{$comic->series}}">
    </div>

    <div class="form-group">
        <label for="sale_date">Sale Date</label>
        <input type="text" class="form-control" id="sale_date" name="sale_date" placeholder="Insert sale date here" value="{{$comic->sale_date}}">
    </div>

    <div class="form-group">
      <label for="type">Select genre</label>
      <select class="form-control" id="type" name="type">
        <option {{$comic->type == "comic book" ? "selected" : ""}}>comic book</option>
        <option {{$comic->type == "graphic novel" ? "selected" : ""}}>graphic novel</option>
      </select>
      <button type="submit" class="btn btn-primary mt-4">Modify</button>
  </form>
  <div>
    <a href="{{route("comics.index")}}">
        <button type="button" class="btn btn-success mt-2">Back</button>
    </a>
  </div>
@endsection