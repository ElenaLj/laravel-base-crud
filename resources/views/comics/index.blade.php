<h1>Comic Books List</h1>
<ul>
    @foreach ($comics as $comic)
    <li>
        <p>{{$comic->title}}</p>
        <p>{{$comic->price}}</p>
        <p>{{$comic->series}}</p>
        <p>{{$comic->type}}</p>
        <p>{{$comic->description}}</p>
        <img src="{{asset("$comic->thumb")}}" alt="{{$comic->title}}">
    </li>
    @endforeach
</ul>