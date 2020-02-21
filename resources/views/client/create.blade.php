@extends('layouts')

@section('container')

    <div>
    <div>
    @if(Session::has('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
            @endif
    </div>
        <p>
            <h3>Formulaire de contact</h3>
        </p>
        <form method="POST" action="{{route('client.store')}}">
            @csrf
            <p><input type="text" name="nom"  placeholder="Votre nom"></p>
            <p><input type="text" name="prenoms"  placeholder="Votre prenoms"></p>
            <p><input type="text" name="adresse"  placeholder="adresse"></p>
            <p><input type="text" name="contact"  placeholder="contact"></p>
            <p><input type="text" name="personne_ressource"  placeholder="personne a contacter en cas..."></p>
            <button type="submit">Envoyer</button>
        </form>
    </div>
@endsection