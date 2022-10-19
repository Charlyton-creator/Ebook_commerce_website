@extends('redirections.baseredirect')
@section('content')
<div class="wrapper">
    <h2>OOps!! Erreur Serveur</h2>
    <div>
        <img src="{{ asset('img/500.svg') }}" alt="500" srcset="">
    </div>
    <h4>Le Serveur a rencontré une erreur lors de l'exécution de la demande!</h4>
    <button type="button" class="main-button">Retour</button>
</div>
    
@endsection