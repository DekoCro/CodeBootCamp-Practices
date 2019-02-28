@extends('practice.layout')


@section('list')

@foreach($cities as $city)
    <li>{{$city->Name}}</li>
@endforeach


@endsection