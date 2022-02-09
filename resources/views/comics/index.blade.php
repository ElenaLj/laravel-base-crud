<h1>Comic Books List</h1>
<ul>
    @foreach ($comics as $comic)
    <li>
        <p>{{$comic->title}}</p>
    </li>
    @endforeach
</ul>