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
        <div class="table-data">
            <div class="order">
                <div class="head">
                    <h3>Abonnements disponibles sur COOKFAST</h3>
                    <i class="bx bx-search"></i>
                    <i class="bx bx-filter"></i>
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>Libelle Abonnement</th>
                            <th>Prix courant</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($abonnements as $abonnement)
                            <tr>
                                <td>
                                   {{--  <img src="{{ asset('img/undraw_profile.svg') }}" alt="" srcset=""> --}}
                                    <p>{{$abonnement->libelle}}</p>
                                </td>
                                <td>{{ $abonnement->is_current_price }}</td>
                                <td><span class="status completed"><a href="/abonnement/edit/{{ $abonnement->id }}" style="color: white;">EDIT</a></span></td>
                                <td><span class="status pending"><a href="/abonnement/delete/{{ $abonnement->id }}" style="color: white;">DELETE</a></span></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <a href="/addabonnement/index" class="btn">Ajouter un abonnement</a>    <a href="/addfeature/index" class="btn">Ajouter un avantage</a>
            </div>
        </div>
    </main>
</section>
@endsection