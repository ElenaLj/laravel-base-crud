@extends('layouts.base');

@section('pageContent')
<h1>Create a new product</h1>
<form action="{{route("comics.store")}}" method="POST">
    @csrf
    <div class="form-group">
      <label for="title">Comic Title</label>
      <input type="text" class="form-control" id="title" placeholder="Insert book title here" name="title">
    </div>

    <div class="form-group">
        <label for="description">Book Plot</label>
        <textarea class="form-control" id="description" rows="3" name="description"></textarea>
      </div>

    <div class="form-group">
        <label for="thumb">Book Cover</label>
        <input type="file" class="form-control-file" id="thumb" name="thumb">
    </div>

    <div class="form-group">
        <label for="price">Book Price</label>
        <input type="number" class="form-control" id="price" name="price" placeholder="Insert book price here">
    </div>

    <div class="form-group">
        <label for="series">Book Series</label>
        <input type="text" class="form-control" id="series" name="series" placeholder="Insert book series here">
    </div>

    <div class="form-group">
        <label for="sale_date">Sale Date</label>
        <input type="text" class="form-control" id="sale_date" name="sale_date" placeholder="Insert sale date here">
    </div>

    <div class="form-group">
      <label for="type">Select genre</label>
      <select class="form-control" id="type" name="type">
        <option>comic book</option>
        <option>graphic novel</option>
      </select>
      <button type="submit" class="btn btn-primary mt-4">Create</button>
  </form>
  <div>
    <a href="{{route("comics.index")}}">
        <button type="button" class="btn btn-success mt-3">Back</button>
    </a>
  </div>

  @if ($errors->any())
    <div class="alert alert-danger mt-2">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
  @endif
@endsection