@extends('app')
@section('content')
<!-- Header Section start -->
<header class="header">
    @include('layouts.menu')
</header>
<!-- Header section end -->
<link rel="stylesheet" href="{{asset('css/cartstyle.css')}}">
<div class="search-bar">
</div>
<main class="cart-container">
    <h1 class="cart-heading">
        <i class="fas fa-shopping-cart">Sopping Cart</i>
    </h1>
    <div class="item-flex">
        <section class="checkout">
            <h2 class="section-heading">Details pour le Payement</h2>
            <div class="payment-form">
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
                <form action="">
                    <div class="cardholder-name">
                        <label for="cardholder-name" class="label-default">cardholder name</label>
                        <input type="text" class="input-default" id="cardholder-name" name="cardholder-name">
                    </div>
                    <div class="card-number">
                        <label for="card-number" class="label-default">card Number</label>
                        <input type="number" class="input-default" id="card-number" name="card-number">
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
                            <input type="number" class="input-default" id="cvv" name="card-number">
                        </div>
                    </div>
                </form> 
            </div>
            <button class="p-btn btn-primary">
                <b>Payer</b><span id="payAmount">20000</span>FCFA
            </button>
        </section>
        <section class="cart">
            <div class="cart-item-box">
                <h2 class="section-heading">Sommaire d'achats</h2>
                <div class="product-card">
                    <div class="p-card">
                        <div class="img-box">
                            <img src="{{ asset('img/image-3-removebg-preview.png') }}" alt="" srcset="" class="product-image" width="80px">
                        </div>
                        <div class="details">
                            <h4 class="product-name">E-Book Gateaux</h4>
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
                                    <span id="price">20000</span>FCFA
                                </div>
                            </div>
                        </div>
                        <button class="product-close-btn">
                            <i class='bx bx-x'></i>
                        </button>
                    </div>
                </div>

                <div class="product-card">
                    <div class="p-card">
                        <div class="img-box">
                            <img src="{{ asset('img/image-3-removebg-preview.png') }}" alt="" srcset="" class="product-image" width="80px">
                        </div>
                        <div class="details">
                            <h4 class="product-name">E-Book Gateaux</h4>
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
                                    <span id="price">20000</span>FCFA
                                </div>
                            </div>
                        </div>
                        <button class="product-close-btn">
                            <i class='bx bx-x'></i>
                        </button>
                    </div>
                </div>

            </div>
            <div class="p-wrapper">
                <div class="discount-token">
                    <label for="discount-token" class="label-default">Gift Card/Discount code</label>
                    <div class="wrapper-flex">
                        <input type="text" name="discount-token" id="discount-token" class="input-default">
                        <button class="p-btn btn-outline">Apply</button>
                    </div>
                </div>
                <div class="amount">
                    <div class="subtotal">
                        <span>Subtotal</span> <span> <span id="subtotal">15000</span> FCFA </span>
                    </div>
                    <div class="tax">
                        <span>Tax</span> <span> <span id="tax">0.10</span> FCFA </span>
                    </div>
                    <div class="shipping">
                        <span>Shipping</span> <span> <span id="shipping">0.0</span> FCFA </span>
                    </div>
                    <div class="total">
                        <span>Total</span> <span> <span id="total">15010</span> FCFA </span>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>
<script src="{{ asset('js/cart.js') }}"></script>
@endsection