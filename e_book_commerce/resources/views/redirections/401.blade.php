@extends('redirections.baseredirect')
@section('content')
<div class="wrapper">
    <h2>Desolé! Acces refusé</h2>
    <div>
        <img src="{{ asset('img/401.svg') }}" alt="401" srcset="">
    </div>
    <h4>Vous n'etes pas autoriser a avoir accès a cette ressource.</h4>
    <button type="button" class="main-button">Retour</button>
</div>
    
@endsection