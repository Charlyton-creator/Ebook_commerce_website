@extends('app')
@section('content')
<!-- Header Section start -->
<header class="header">
    @include('layouts.menu')
</header>
<!-- Header section end -->
<link rel="stylesheet" href="{{ asset('css/aboncardstyle.css') }}">
<div class="search-bar">
</div>
<h1 class="heading"><span>Nos offres d'abonnements</span></h1>
<div class="wrapper">
    <div class="table basic">
        <div class="price-section">
            <div class="price-area">
                <div class="inner-area">
                    <span class="text">10000</span>
                    <span class="price">FCFA</span>
                </div>
            </div>
        </div>
        <div class="package-name"></div>
        <div class="features">
            <li>
                <span class="list-name">5 publications par jour</span>
                <span class="icon check"><i class="fas fa-check"></i></span>
            </li>
            <li>
                <span class="list-name">Suivi de vos publicités par notre plateforme</span>
                <span class="icon check"><i class="fas fa-check"></i></span>
            </li>
            <li>
                <span class="list-name">Sytème de Notification si quelqu'un a liké</span>
                <span class="icon cross"><i class="fas fa-times"></i></span>
            </li>
            <li>
                <span class="list-name">Système de partage avec les reseaux sociaux pour vos publications</span>
                <span class="icon cross"><i class="fas fa-times"></i></span>
            </li>
            <li>
                <span class="list-name">Dashboard</span>
                <span class="icon cross"><i class="fas fa-times"></i></span>
            </li>
        </div>
        <div class="purchase-btn"><button><a href="{{ route('souscriptionpage', ['packname' => 'basic']) }}">Purchase</a></button></div>
    </div>
    <div class="table premium">
        <div class="ribbon"><span>Recommandé</span></div>
        <div class="price-section">
            <div class="price-area">
                <div class="inner-area">
                    <span class="text">20000</span>
                    <span class="price">FCFA</span>
                </div>
            </div>
        </div>
        <div class="package-name"></div>
        <div class="features">
            <li>
                <span class="list-name">10 publications par jour</span>
                <span class="icon check"><i class="fas fa-check"></i></span>
            </li>
            <li>
                <span class="list-name">Suivi de vos publicités par notre plateforme</span>
                <span class="icon check"><i class="fas fa-check"></i></span>
            </li>
            <li>
                <span class="list-name">Sytème de Notification si quelqu'un a liké</span>
                <span class="icon check"><i class="fas fa-check"></i></span>
            </li>
            <li>
                <span class="list-name">Système de partage avec les reseaux sociaux pour vos publications</span>
                <span class="icon cross"><i class="fas fa-times"></i></span>
            </li>
            <li>
                <span class="list-name">Dashboard</span>
                <span class="icon cross"><i class="fas fa-times"></i></span>
            </li>
        </div>
        <div class="purchase-btn"><button><a href="{{ route('souscriptionpage', ['packname' => 'premium']) }}">Purchase</a></button></div>
    </div>
    <div class="table ultimate">
        <div class="price-section">
            <div class="price-area">
                <div class="inner-area">
                    <span class="text">30000</span>
                    <span class="price">FCFA</span>
                </div>
            </div>
        </div>
        <div class="package-name"></div>
        <div class="features">
            <li>
                <span class="list-name">publications par jour illimités</span>
                <span class="icon check"><i class="fas fa-check"></i></span>
            </li>
            <li>
                <span class="list-name">Suivi de vos publicités par notre plateforme</span>
                <span class="icon check"><i class="fas fa-check"></i></span>
            </li>
            <li>
                <span class="list-name">Sytème de Notification si quelqu'un a liké</span>
                <span class="icon check"><i class="fas fa-check"></i></span>
            </li>
            <li>
                <span class="list-name">Système de partage avec les reseaux sociaux pour vos publications</span>
                <span class="icon check"><i class="fas fa-check"></i></span>
            </li>
            <li>
                <span class="list-name">Dashboard</span>
                <span class="icon check"><i class="fas fa-check"></i></span>
            </li>
        </div>
        <div class="purchase-btn"><button><a href="{{ route('souscriptionpage', ['packname' => 'ultimate']) }}">Purchase</a></button></div>
    </div>
</div>
@endsection