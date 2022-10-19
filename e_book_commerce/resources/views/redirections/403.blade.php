@extends('redirections.baseredirect')
@section('content')
<div class="wrapper">
    <h2>OOps!! Page non accessible</h2>
    <div>
        <img src="{{ asset('img/403.svg') }}" alt="403" srcset="">
    </div>
    <h4>La Page que vous avez demander est disponible mais pas accessible actuellement</h4>
    <button type="button" class="main-button">Retour</button>
</div>
    
@endsection