@extends('dashboard.dashboard')
@section('content')
<section id="content">
    <nav>
        <i class='bx bx-menu' ></i>
        <a href="" class="nav-link">Catégories</a>
        <form action="" method="post">
            <div class="form-input">
                <input type="search" name="" id="">
                <button type="submit" class="search-btn">
                    <i class='bx bx-search' ></i>
                </button>
            </div>
        </form>
        <a href="http://" class="notification">
            <i class='bx bxs-bell' ></i>
            <span class="num">8</span>
        </a>
        <a href="" class="notification">
            <i class='bx bxs-cart-download' ></i>
            <span class="num">4</span>
        </a>
        <a href="http://" class="profile">
            <img src="{{ asset('img/undraw_profile.svg') }}" alt="" srcset="" width="36px">
        </a>
    </nav>
    <main>
        <div class="head-title">
            <div class="left">
                <h1>Abonnements</h1>
                <ul class="breadcrumb">
                    <li>
                        <a href="">Dashboard</a>
                    </li>
                    <li><i class="bx bx-chevron-right"></i></li>
                    <li>
                        <a class="active" href="">Abonnements</a>
                    </li>
                </ul>
            </div>
            <a href="" class="btn-download">
                <i class="bx bxs-cloud-download"></i>
                <span class="text">Télécharger PDF</span>
            </a>
        </div>
        @if (session('success'))
            <div class="alert show">
                <span class="fas fa-success"></span>
                <span class="msg">
                    {{session('success')}}
                </span>
                <span class="close-btn">
                    <span class="fas fa-times"></span>
                </span>
            </div>
        @else
            @if (session('error'))
                <div class="alert show">
                    <span class="fas fa-times"></span>
                    <span class="msg">
                        {{session('error')}}
                    </span>
                    <span class="close-btn">
                        <span class="fas fa-times"></span>
                    </span>
                </div>
            @endif
        @endif
        <div class="table-data">
            <div class="order">
                <div class="head">
                    <h3>Ajouter un Abonnement sur COOKFAST</h3>
                    <i class="bx bx-search"></i>
                    <i class="bx bx-filter"></i>
                </div>
                <table>
                    <form action="{{ route('addabonnement') }}" method="post">
                        @csrf
                        <div class="container">
                            <div class="form-box">
                                <label for="libelle">Libelle de l'abonnement</label>
                                <input type="text" name="libelle" class="field" placeholder="">
                                <label for="prix_basic">Prix de base de l'abonnement</label>
                                <input type="number" name="prix_basic" class="field" placeholder="">
                                <label for="prix_actuel">Prix Actuel de l'abonnement</label>
                                <input type="number" name="prix_current" class="field" placeholder="">
                                <button class="btn" type="submit">Sauvegarder</button>
                            </div>
                        </div>
                    </form>                  
                </table>
            </div>
        </div>
    </main>
</section>
@endsection