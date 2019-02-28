{{-- task 4 morning workout day 42 --}}
@extends('layouts/app');

@section('content')

{{-- task 5 morning workout day 42 --}}
<form method="post" action=" {{ action('BookController@store')}} ">

    @csrf
    <div class="form-group">
      <div class="form-group">
          <label>Publisher</label>
          <select name="publisher_id" class="form-control">
            @foreach($publishers as $publisher)
            <option value="{{$publisher->id}}">{{$publisher->name}}</option>
            @endforeach
          </select>
        </div>

      <label>Title</label>
      <input type="text" name="title" class="form-control">
    </div>
    <div class="form-group">
      <label>Authors</label>
      <input type="text" name="authors" class="form-control">
    </div>
    <div class="form-group">
      <label>Image</label>
      <input type="text" name="image" class="form-control">
    </div>

    <div class="form-group">
      <label>Genre</label>
        <select name="genres" class="form-control">

          @foreach($genres as $genre)
            <option value="{{$genre->id}}">{{$genre->name}}</option>
          @endforeach

      </select>
    </div>

    <div class="form-group">
        <label>Shops</label>
        {{-- multiple attribute allows us to select multiple options --}}
          <select name="bookshops_id" class="form-control" multiple>

            @foreach($bookshops as $shops)
              <option value="{{$shops->id}}">{{$shops->name}}</option>
            @endforeach

        </select>
      </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

@endsection