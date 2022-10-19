@extends('redirections.baseredirect')
@section('content')
<div class="wrapper">
    <h2>OOps!! Page Non trouvé</h2>
    <div>
        <img src="{{ asset('img/404.svg') }}" alt="404" srcset="">
    </div>
    <h4>La Page que vous avez demander est introuvable sur ce serveur</h4>
    <button type="button" class="main-button"> <a href="{{ route('home') }}">Retour</a></button>
</div>
    
@endsection