@extends('template')
@section('section')
    <form action="/user-update/{{$edit->id}}" method="post">
        @csrf
    <input type="text" name="nom" value="{{$edit->nom}}">
        <select name="genre" value="{{$edit->genre}}">
        <option value="homme">Homme</option>
        <option value="femme">Femme</option>
        </select>
        <input type="number" name="age" value="{{$edit->age}}">
        <button type="submit">Update</button>
    </form>
@endsection