@extends('app')
@section('content')
<!-- Header Section start -->
<header class="header">
    @include('layouts.menu')
</header>
<!-- Header section end -->
<link rel="stylesheet" href="{{asset('css/cartstyle.css')}}">
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<div class="search-bar">
</div>
<main class="cart-container">
    <h1 class="cart-heading">
        <i class="fas fa-shopping-cart">Shopping Cart</i>
    </h1>
    @php
        $total = 0;
        for($i=0; $i<count($ebooks); $i++){
            $total += $ebooks[$i]->is_current_price;
        }
    @endphp
    <div class="item-flex">
        <section class="checkout">
            @if (session('commande'))
                <h2 class="section-heading">Details pour le Payement</h2>
                <div class="payment-form active" id="payement_form">
                    <div class="payment-method">
                        <button class="method selected">
                            <i class="fa-solid fa-business-time"></i>
                            <span>Carte de Crédit</span>
                            <i class="checked fa-solid fa-circle-check"></i>
                        </button>
                        <button class="method">
                            <i class="fa-solid fa-business-time"></i>
                            <span>T-Money</span>
                            <i class='checked bx bx-check-circle'></i>
                        </button>
                        <button class="method">
                            <i class="fa-solid fa-business-time"></i>
                            <span>Flooz</span>
                            <i class='checked bx bx-check-circle'></i>
                        </button>
                    </div>
                    <form action="{{route('payer')}}" method="POST">
                        @csrf
                        <div class="cardholder-name">
                            <label for="cardholder-name" class="label-default">cardholder name</label>
                            <input type="text" class="input-default" id="cardholder-name" name="cardholder-name">
                        </div>
                        <div class="card-number">
                            <label for="card-number" class="label-default">card Number</label>
                            <input type="number" class="input-default" id="card-number" name="card-number">
                        </div>
                        <div class="Address">
                            <label for="address" class="label-default">Addresse</label>
                            <input type="text" class="input-default" id="address" name="user_address">
                        </div>
                        <div class="input-flex">
                            <div class="expire-date">
                                <label for="expire-date" class="label-default">Expiration date</label>
                                <div class="input-flex">
                                    <input type="number" name="day" id="expire-date" placeholder="31" min="1" max="31" class="input-default">
                                    /
                                    <input type="number" name="month" id="expire-date" placeholder="12" min="1" max="12" class="input-default">
                                </div>
                            </div>
                            <div class="cvv">
                                <label for="cvv" class="label-default">CVV</label>
                                <input type="number" class="input-default" id="cvv" name="cvv">
                            </div>
                            <div class="cvv">
                                <label for="method" class="label-default">Net a Payer</label>
                                <input type="number" class="input-default" id="total" name="total" value="{{$total}}">
                            </div>
                            <div class="cvv">
                                <label for="method" class="label-default"></label>
                                <input type="hidden" class="input-default" id="paymethod" name="payement_method" value="carte_credit">
                            </div>
                        </div>
                        <button class="p-btn btn-pay btn-primary active" id="pay_btn">
                            <b>Payer</b><span id="payAmount">{{$total}}</span>FCFA
                        </button>
                    </form> 
                </div>
            @else
                <div class="alert show">
                    <span class="fa fas fa-times"></span>
                    <span class="msg">
                        Veuillez d'abord valider votre panier pour procéder au payement!
                    </span>
                </div>
            @endif
        </section>
        <section class="cart">
            <div class="cart-item-box">
                <h2 class="section-heading">Sommaire d'achats</h2>
                @foreach ($ebooks as $item)
                    <div class="product-card">
                        <div class="p-card">
                            <div class="img-box">
                                <img src="{{ asset('img/image-3-removebg-preview.png') }}" alt="" srcset="" class="product-image" width="80px">
                            </div>
                            <div class="details">
                                <h4 class="product-name">{{$item->libelle}}</h4>
                                <div class="p-wrapper">
                                    <div class="product-qty">
                                        <button id="decrement">
                                            <i class='bx bx-minus'></i>
                                        </button>
                                        <span id="quantity">1</span>
                                        <button id="increment">
                                            <i class="fa-light fa-plus"></i>
                                        </button>
                                    </div>
                                    <div class="price">
                                        <span id="price">{{$item->is_current_price}}</span>FCFA
                                    </div>
                                </div>
                            </div>
                            <button class="product-close-btn">
                                <i class='bx bx-x'></i>
                            </button>
                        </div>
                    </div>
                @endforeach
            </div>
            <button class="p-btn btn-primary">
                <b><a href="{{ route('valider') }}"> Valider le panier</a></b>
            </button>
            <div class="p-wrapper">
                <div class="discount-token">
                    <label for="discount-token" class="label-default">Gift Card/Discount code</label>
                    <div class="wrapper-flex">
                        <form action="/applycode" method="get">
                            <input type="text" name="discount_token" id="discount-token" class="input-default">
                            <button class="p-btn btn-outline" id="apply">Apply</a></button>
                        </form>
                    </div>
                </div>
                <div class="amount">
                    <div class="subtotal">
                        <span>Subtotal</span> <span> <span id="subtotal">{{$total}}</span> FCFA </span>
                    </div>
                    {{-- <div class="tax">
                        <span>Tax</span> <span> <span id="tax">0.10</span> FCFA </span>
                    </div> --}}
                    <div class="shipping">
                        <span>Shipping</span> <span> <span id="shipping">0.0</span> FCFA </span>
                    </div>
                    @if(session('reduction'))
                        <div class="shipping">
                            <span>Reduction</span> <span> <span id="reduction">{{session('reduction')}}</span> FCFA </span>
                        </div>
                    @endif   
                    @if(session('unavailable'))
                        <div class="shipping">
                            <p>La Promotion est Terminé</p>
                        </div>
                    @endif                 
                    <div class="total">
                        <span>Total</span> <span> <span id="total">{{$total}}</span> FCFA </span>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>
<script src="{{ asset('js/cart.js') }}"></script>
@endsection