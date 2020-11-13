@extends('template')
@section('section')
    <h2>Information Membres</h2>
    <h3>Prénom : {{$show->nom}}</h3>
    <h3>Genre : {{$show->genre}}</h3>
    <h3>Age : {{$show->age}}</h3>
    <a class="btn btn-primary" href="/edit/{{$show->id}}">Edit </a>
    <form action="/delete/{{$show->id}}" method="post">
        @csrf
        <button  class="btn btn-danger" type="submit">Delete</button>
    </form>
@endsection