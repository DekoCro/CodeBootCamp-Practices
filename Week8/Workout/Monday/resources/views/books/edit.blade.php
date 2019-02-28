@extends('layouts/app');

@section('content')
<h1>Edit book:</h1>
{{-- task 5 morning workout day 42 --}}
<form method="post" action=" {{ action('BookController@update' , $book->id) }} ">

    @csrf
    <input type="hidden" name="_method" value="put"/>
    {{-- or --}}
    {{ method_field('put')}}

    <div class="form-group">
      <label>Title</label>                            {{-- // day 42 Book project task CRUD --}}
      <input type="text" name="title" class="form-control" value=" {{ $book->title }} ">
    </div>
    <div class="form-group">
      <label>Authors</label>                          {{-- // day 42 Book project task CRUD --}}
      <input type="text" name="authors" class="form-control" value=" {{ $book->authors }} ">
    </div>
    <div class="form-group">
      <label>Image</label>                              {{-- // day 42 Book project task CRUD --}}
      <input type="text" name="image" class="form-control" value=" {{ $book->image }} ">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

@endsection