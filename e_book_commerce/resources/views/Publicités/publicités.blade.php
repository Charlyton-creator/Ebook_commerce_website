@extends('app')
@section('content')
<!-- Header Section start -->
<header class="header">
    @include('layouts.menu')
</header>
<!-- Header section end -->
<link rel="stylesheet" href="{{asset('css/publicitestyle.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
<div class="search-bar">
</div>
<h1 class="heading"><span>Publications</span></h1>
<div class="precheck">
<p>Les publications sont réservés aux abonnées, nous nous assurons de faire passer leur message a travers notre plateforme
    agrandir leur visiblité, accroitre leur productivité et autre.
</p>
</div>
<section>
    <div class="container">
        <div class="owl-carousel content">
            <div class="card">
                <div class="card-content">
                    <div class="profile-image">
                        <img src="{{ asset('img/GTA_Assurances_logo.png') }}" alt="" srcset="">
                    </div>
                    <div class="media-icons">
                        <i class="fab fa-facebook-f"></i>
                        <i class="fab fa-twitter"></i>
                        <i class="fab fa-google"></i>
                        <i class="fab fa-linkedin-in"></i>
                    </div>
                    <div class="name-profession">
                        <span class="name">Someone name</span>
                        <span class="profession">Someone profession</span>
                    </div>
                    <div class="l-wrapper">
                        <div class="radio-group">
                            <input type="radio" name="like" id="">
                            <label for="like">
                                <i class="fas fa-thumbs-up"></i>
                            </label>
                        </div>
                        <div class="radio-group">
                            <input type="radio" name="like" id="">
                            <label for="like">
                                <i class="fas fa-thumbs-down"></i>
                            </label>
                        </div>
                    </div>
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="pub-button">
                        <button class="hireMe">Contacter</button>
                    </div>
                </div>
            </div>    
            <div class="card">
                <div class="card-content">
                    <div class="profile-image">
                        <img src="{{ asset('img/GTA_Assurances_logo.png') }}" alt="" srcset="">
                    </div>
                    <div class="media-icons">
                        <i class="fab fa-facebook-f"></i>
                        <i class="fab fa-twitter"></i>
                        <i class="fab fa-google"></i>
                        <i class="fab fa-linkedin-in"></i>
                    </div>
                    <div class="name-profession">
                        <span class="name">Someone name</span>
                        <span class="profession">Someone profession</span>
                    </div>
                    <div class="l-wrapper">
                        <div class="radio-group">
                            <input type="radio" name="like" id="">
                            <label for="like">
                                <i class="fas fa-thumbs-up"></i>
                            </label>
                        </div>
                        <div class="radio-group">
                            <input type="radio" name="like" id="">
                            <label for="like">
                                <i class="fas fa-thumbs-down"></i>
                            </label>
                        </div>
                    </div>
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="pub-button">
                        <button class="hireMe">Contacter</button>
                    </div>
                </div>
            </div>  
            <div class="card">
                <div class="card-content">
                    <div class="profile-image">
                        <img src="{{ asset('img/GTA_Assurances_logo.png') }}" alt="" srcset="">
                    </div>
                    <div class="media-icons">
                        <i class="fab fa-facebook-f"></i>
                        <i class="fab fa-twitter"></i>
                        <i class="fab fa-google"></i>
                        <i class="fab fa-linkedin-in"></i>
                    </div>
                    <div class="name-profession">
                        <span class="name">Someone name</span>
                        <span class="profession">Someone profession</span>
                    </div>
                    <div class="l-wrapper">
                        <div class="radio-group">
                            <input type="radio" name="like" id="">
                            <label for="like">
                                <i class="fas fa-thumbs-up"></i>
                            </label>
                        </div>
                        <div class="radio-group">
                            <input type="radio" name="like" id="">
                            <label for="like">
                                <i class="fas fa-thumbs-down"></i>
                            </label>
                        </div>
                    </div>
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="pub-button">
                        <button class="hireMe">Contacter</button>
                    </div>
                </div>
            </div>  
            <div class="card">
                <div class="card-content">
                    <div class="profile-image">
                        <img src="{{ asset('img/GTA_Assurances_logo.png') }}" alt="" srcset="">
                    </div>
                    <div class="media-icons">
                        <i class="fab fa-facebook-f"></i>
                        <i class="fab fa-twitter"></i>
                        <i class="fab fa-google"></i>
                        <i class="fab fa-linkedin-in"></i>
                    </div>
                    <div class="name-profession">
                        <span class="name">Someone name</span>
                        <span class="profession">Someone profession</span>
                    </div>
                    <div class="l-wrapper">
                        <div class="radio-group">
                            <input type="radio" name="like" id="">
                            <label for="like">
                                <i class="fas fa-thumbs-up"></i>
                            </label>
                        </div>
                        <div class="radio-group">
                            <input type="radio" name="like" id="">
                            <label for="like">
                                <i class="fas fa-thumbs-down"></i>
                            </label>
                        </div>
                    </div>
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="pub-button">
                        <button class="hireMe">Contacter</button>
                    </div>
                </div>
            </div>  
        </div>
    </div>
</section>
<section class="deal">
    <div class="content">
        <h3>Abonnement</h3>
        <h1>Augmenter votre visibilité en publiant des offres, des publicités, des articles et attirés les internautes!</h1>
        <p>Nous nous occupons de tout. Renseigner juste la pub, notre plateforme se charge de la difuser pour vous. Ayez ainsi la chance de toucher un grnd nombre d'utilisateurs en des secondes!!</p>
        <a href="{{ route('abonnements')}}" class="btn">Trouver un Abonnement</a>
    </div>
    <div class="image">
        <img src="{{asset('img/undraw_services_re_hu5n.svg')}}" alt="">
    </div>
</section>

<!-- put jquery before owl carousel -->
<!-- jquery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<!-- owl carousel -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
   $('.owl-carousel').owlCarousel({
    items:3,
    loop:true,
    margin:10,
    autoplay:true,
    autoplayTimeout:3000,
    autoplayHoverPause:true,
    responsive:{
        0:{
            items:1,
            nav:false
        },
        600:{
            items:2,
            nav:true
        },
        1000:{
            items:4,
            nav:true,
            loop:true
        }
    }
})
</script>
@endsection