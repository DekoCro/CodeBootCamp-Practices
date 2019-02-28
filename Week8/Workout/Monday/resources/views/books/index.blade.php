<html>
<head>
    <title>books</title>
    <link rel="stylesheet" href="/css/main.css" type="text/css">
</head>
<body>
    <h1>Books</h1>
    <hr>
 
    <div id="books">
        @foreach($books as $book)

        {{-- book model/object have publisher method--}}
        @if($book->publisher)
        <h2>{{$book->publisher->name}}</h2>
       @endif

        <img src="{{ $book->image }}" alt="{{ $book->title}}" style="width: 200px; height: 240px;">
        <a href="{{ action('BookController@edit', $book->id)}}">EDIT</a>
        <div>
            <h2>Book title: {{ $book->title}}</h2>
            <h3>Authors: {{ $book->authors}}</h3>
           
            <p>Genres :
                @foreach( $book->genres as $genre)
                    {{ $genre->name }}
                @endforeach  
            </p>
            {{--book model/object have bookshops method--}}
            
            @if($book->bookshops->count() > 0)
            {{--if count of bookshop is greater than 0 show books--}}
                <ul>
                    @foreach($book->bookshops as $shop)
                    <li>{{ $shop->name}}</li>
                    @endforeach
                </ul>
            @else
                <p>This book is not avaliable</p>
            @endif
            
        </div>
        <hr style="width:100%">
        @endforeach   
    </div>
</body>
</html>