@extends('layouts')

@section('container')

    <div>
        <p>
            <h3>Accueil</h3>
        </p>
        <div>
        <a href="{{route('client.create')}}"> Client formulaire</a>
        </div>

    </div>
@endsection