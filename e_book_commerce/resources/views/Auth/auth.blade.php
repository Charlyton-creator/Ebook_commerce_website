@extends('app')
@section('content')
<!-- Header Section start -->
<header class="header">
    @include('layouts.menu')
</header>
<!-- Header section end -->
<link rel="stylesheet" href="{{ asset('css/authstyle.css') }}">
<div class="search-bar">
</div>
<div class="container">
    <div class="forms-container">
        <div class="signin-signup">
            <form class="signin-form" action="{{ route('login')}}" method="POST">
                @if(session('msg'))
                    <div class="errors" role="">
                        {{ session('msg') }}
                    </div>
                @endif 
                <h2 class="title">Se connecter</h2>
                @csrf
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="email" name="email" id="email" placeholder="Renseigner votre email" required>
                    @if ($errors->has('email'))
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="password" id="password" placeholder="Renseigner votre mot de passe" required>
                    @if ($errors->has('password'))
                        <span class="text-danger">{{ $errors->first('password') }}</span>
                    @endif
                </div>
                <input type="submit" value="Login" class="btn solid">
                <p class="social-text">Ou bien Se connecter avec</p>
                <div class="social-media">
                    <a href="" class="social-icon">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="" class="social-icon">
                    <i class="fab fa-twitter"></i>
                    </a>
                    <a href="" class="social-icon">
                    <i class="fab fa-google"></i>
                    </a>
                    <a href="" class="social-icon">
                    <i class="fab fa-linkedin-in"></i>
                    </a>
                </div>
            </form>
            <form class="sign-up-form" id="inscrire">
                <h2 class="title">S'inscrire</h2>
                @csrf
                <div class="input-field">
                    <i class="fas fa-enveloppe"></i>
                    <input type="email" name="email" id="em" placeholder="Email" required>
                </div>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" name="name" id="name" placeholder="Nom" required>
                </div>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" name="prenom" id="prenom" placeholder="Prenom">
                </div>
                <div class="input-field">
                    <i class="fas fa-phone"></i>
                    <input type="number" name="tel" id="tel" placeholder="Tel" required>
                </div>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" name="sexe" id="sexe" placeholder="Sexe" required>
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="password" id="pwd" placeholder="Mot de passe" required>
                </div>
                <input type="submit" value="Register" class="btn solid">
                <p class="social-text">Ou bien S'inscrire avec</p>
                <div class="social-media">
                    <a href="" class="social-icon">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="" class="social-icon">
                    <i class="fab fa-twitter"></i>
                    </a>
                    <a href="" class="social-icon">
                    <i class="fab fa-google"></i>
                    </a>
                    <a href="" class="social-icon">
                    <i class="fab fa-linkedin-in"></i>
                    </a>
                </div>
            </form>
        </div>
    </div>
    <div class="panels-container">
        <div class="panel left-panel">
            <div class="content">
                <h3>Coucou! nouveau arrivé sur notre plateforme?</h3>
                <p>Sachez que si vous chercher un endroit pour vous ressourcer et devenir botre propre 
                    maitre cuisinier, vous etes au bon endroit. Veuillez cliquer et vous inscrire afin de benéficier
                    de tous les avantages qui vont avec.......
                </p>
                <button class="button transparent" id="sign-up-btn">S'inscrire</button>
            </div>
            <img src="{{ asset('img/undraw_join_re_w1lh.svg') }}" alt="" srcset="" class="image"> 
        </div>
        <div class="panel right-panel">
            <div class="content">
                <h3>Coucou! Vous avez un compte sur notre plateforme?</h3>
                <p>Connecter vous a votre compte et ajouter des e-books a votre panier, souscrire a des abonnements
                    suivre l'état de vos achats et tout et tout.....
                </p>
                <button class="button transparent" id="sign-in-btn">Se Connecter</button>
            </div>
            <img src="{{ asset('img/undraw_working_remotely_re_6b3a.svg') }}" alt="" srcset="" class="image">
        </div>
    </div>
</div>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>
const formInscription = document.querySelector("#inscrire");
formInscription.addEventListener('submit',function(e) {
    e.preventDefault();
    let email = $("#em").val();
    let nom = $("#name").val();
    let prenom = $("#prenom").val();
    let tel = $("#tel").val();
    let sexe = $("#sexe").val();
    let password = $("#pwd").val();
    let _token = $("input[name=_token]").val();
    console.log(email, nom, password, prenom, tel, sexe, _token)

    $.ajax({
        url: "{{route('register')}}",
        type: "POST",
        data: {
            email: email,
            name: nom,
            password: password,
            prenom: prenom,
            tel: tel,
            sexe: sexe,
            _token: _token
        },
        beforeSend: function(){
            let TimeInterval;
            Swal.fire({
                title: 'Traitement de votre requete en cours ...',
                html: 'Chargement dans <b></b> milliseconds.',
                timer: 10000,
                timerProgressBar: true,
                didOpen: () => {
                    Swal.showLoading()
                    const b = Swal.getHtmlContainer().querySelector('b')
                    TimeInterval = setInterval(() => {
                        b.textContent = Swal.getTimerLeft()
                    }, 100)
                },
                willClose: () => {
                    clearInterval(TimeInterval)
                }
            }).then((result) => {
                    /* Read more about handling dismissals below */
                if (result.dismiss === Swal.DismissReason.timer) {
                    console.log('I was closed by the timer')
                }
            })
        },
        success: function(response) {
            if (response) {
                Swal.fire({
                  icon: 'success',
                  title: 'Envoyé avec succès',
                  text: "Vos informations ont été prises en compte. Thanks you",
                  showConfirmButton: true,
                })
                $('#inscrire')[0].reset();
                $('#inscrire')[0].hide();
            }
        },
        error: function() {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Quelque Chose s est mal passé svp veuillez reverifier votre formulaire',
            })
        }
    });
});
</script>
@endsection