@extends('template')
@section('section')
    
<form action="/store-membre" method="post">
    @csrf
    <input type="text" name="nom" placeholder="nom">
    <select name="genre">
        <option value="homme">Homme</option>
        <option value="femme">Femme</option>
      </select>
    <input type="number" name="age" placeholder="age">

<button type="submit">CREATE</button>

</form>
@endsection