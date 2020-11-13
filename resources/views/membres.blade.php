@extends('template')
@section('section')
@foreach ($data as $item)

    
<div class="card m-3 {{ $item->genre=="homme" ? 'bg-primary' : 'bg-danger' }}  " style="width: 18rem;">
    <div class="card-body text-light">
        <h5 class="card-title">Prénom : {{$item->nom}}</h5>
    <a href="/show-membre/{{$item->id}}" class="bg-dark text-light p-2" style="text-decoration: none">Info {{$item->nom}}</a>
    </div>
</div>

@endforeach
<a class='btn btn-primary' href="/destroy">Destroy all</a>
@endsection