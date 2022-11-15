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
    @foreach ($abonnements as $abonnement)
        <div class="table {{$abonnement->libelle}}">
            <div class="{{$abonnement->libelle}} ribbon"><span>{{$abonnement->statut}}</span></div>
            <div class="price-section">
                <div class="price-area">
                    <div class="inner-area">
                        <span class="text">{{$abonnement->is_current_price}}</span>
                        <span class="price">FCFA</span>
                    </div>
                </div>
            </div>
            <div class="package-name"></div>
            <div class="features">
                @foreach ($abonnement->features as $item)
                    <li>
                        <span class="list-name">{{ $item->libelle }}</span>
                        <span class="icon check"><i class="fas fa-check"></i></span>
                    </li>
                @endforeach
            </div>
            <div class="purchase-btn"><button><a href="{{ route('souscriptionpage', ['packname' =>$abonnement->libelle]) }}">Purchase</a></button></div>
        </div>
    @endforeach
</div>
@endsection