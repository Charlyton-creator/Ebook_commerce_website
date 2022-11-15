@extends('app')
@section('content')
<!-- Header Section start -->
<header class="header">
    @include('layouts.menu')
</header>
@include('layouts.ebboksbanner')
<!-- Header section end -->
<link rel="stylesheet" href="{{asset('css/offresstyle.css')}}">
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
<div class="search-bar">
    <form action="" method="post" class="search-form">
        <input type="search" name="" id="search-box" class="" placeholder="search Here ........">
        <label for="search-box"> <i class="fas fa-search"></i> </label>
    </form>
<div class="precheck">
    <p>Les meilleurs E-Books culinaires du web. Trouver vous un E-Book et faite vous plaisir en vous laissant guider. Avec COOKFAST mangez bien et proprement</p>
</div>
<!-- Featured section start-->
    <section id="featured" class="featured">
        <h1 class="heading"><span>Tous nos Ebooks</span></h1>
        <div class="featured-slider">
            <div class="wraper">
                @foreach ($allebooks as $ebook)
                    <div class="box">
                        <div class="icons">
                            <a href="http://" class="fas fa-thumbs-down"></a>
                            <a href="http://" class="fas fa-heart"></a>
                        </div>
                        <div class="image">
                            <img src="{{ asset('img/image-4-removebg-preview.png') }}" alt="" srcset="">
                        </div>
                        <div class="content">
                            <h3>{{$ebook->libelle}}</h3>
                            <div class="price">{{$ebook->is_current_price}}FCFA<span>{{$ebook->price}}FCFA</span></div>
                            <div class="recettes_number"><span><strong>Recettes:   </strong>{{ $ebook->nombre_recettes }}</span></div>
                            <div class="tags">
                                <span class="af active">AF</span>
                                <span class="eu">EU</span>
                            </div>
                            <div class="stars">
                                <span>Note</span>
                                <i class="bx bx-star"></i>
                                <i class="bx bx-star"></i>
                                <i class="bx bx-star"></i>
                                <i class="bx bx-star"></i>
                                <i class="bx bx-star"></i>
                            </div>
                            <a href="/addcart/{{$ebook->id}}" class="btn">Ajouter au Panier</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Featured section End-->
<script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
<!-- put jquery before owl carousel -->
<!-- jquery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<!-- owl carousel -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    
</script>
<script>
   $('.owl-carousel').owlCarousel({
    items:3,
    loop:true,
    margin:10,
    autoplay:true,
    autoplayTimeout:3000,
    autoplayHoverPause:true,
    nav:true,
    responsive:{
        0:{
            items:1,
            nav:false
        },
        600:{
            items:2
        },
        1000:{
            items:2
        },
        1080:{
            items:3
        }
    }
})
</script>
@endsection