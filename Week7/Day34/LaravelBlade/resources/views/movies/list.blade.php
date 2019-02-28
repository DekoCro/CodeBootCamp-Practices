@extends('/movies/layout')

@section('content')

@foreach($movies as $movie)

<div class="movie">
    <h1>{{ $movie->title }}</h1>
    <h2>{{ $movie->genre}}</h2>
    
    @if($movie->ratings != 0)
    <h3>IMDB Rating: {{ $movie->ratings }}</h3>
    @endif

    <div>
        <p>Short description:<br>{{ $movie->description }} </p>
        
        @if($movie->is_released == true)
    <h4 style="color: green;">Released - {{ $movie->created_at }}</h4>
         @else 
            <h4 style="color: red;">Not released - {{ $movie->created_at }}</h4>
        @endif

    </div>
</div>
@endforeach

@endsection

@section('content-style')

<style>
* {
    box-sizing: border-box;
}
body {
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
}
.movie {
    border: 1px solid black;
    width: 40vw;
    display: flex;
    flex-direction: column;
    align-items: center;
    margin-bottom: 1em;
    background: linear-gradient(45deg, #e1ffff 0%,#e1ffff 7%,#e1ffff 12%,#fdffff 12%,#e6f8fd 30%,#c8eefb 54%,#bee4f8 75%,#b1d8f5 100%);
    justify-content: center;
    padding: 1em;
}
.movie div {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}
.movie div p{
    padding: 1em;
}

</style>

@endsection