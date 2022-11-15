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
                <h1>Dashboard</h1>
                <ul class="breadcrumb">
                    <li>
                        <a href="">Dashboard</a>
                    </li>
                    <li><i class="bx bx-chevron-right"></i></li>
                    <li>
                        <a class="active" href="">Home</a>
                    </li>
                </ul>
            </div>
            <a href="" class="btn-download">
                <i class="bx bxs-cloud-download"></i>
                <span class="text">Télécharger PDF</span>
            </a>
        </div>
        <ul class="box-info">
            @if (session('user') && auth()->user()->has_abonnement == 1)
            <li>
                <i class="bx bxs-calendar-check"></i>
                <span class="text">
                    <h3>{{$number_users}}</h3>
                    <p>Publicités</p>
                </span>
            </li>
            <li>
                <i class="bx bxs-calendar-check"></i>
                <span class="text">
                    <h3>{{$number_abonnees}}</h3>
                    <p>Vues</p>
                </span>
            </li>
            <li>
                <i class="bx bxs-dollars-circle"></i>
                <span class="text">
                    <h3>1020</h3>
                    <p>Likes</p>
                </span>
            </li>
            @else
            <li>
                <i class="bx bxs-calendar-check"></i>
                <span class="text">
                    <h3>{{$number_users}}</h3>
                    <p>Utilisateurs</p>
                </span>
            </li>
            <li>
                <i class="bx bxs-calendar-check"></i>
                <span class="text">
                    <h3>{{$number_abonnees}}</h3>
                    <p>Abonnés</p>
                </span>
            </li>
            <li>
                <i class="bx bxs-dollars-circle"></i>
                <span class="text">
                    <h3>1020 FCFA</h3>
                    <p>Total Achats</p>
                </span>
            </li>
            @endif
        </ul>
        <div class="table-data">
            <div class="order">
                <div class="head">
                    <h3>Recentes Achats</h3>
                    <i class="bx bx-search"></i>
                    <i class="bx bx-filter"></i>
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>Utilisateur</th>
                            <th>Date d'achat</th>
                            <th>Statut du payement</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($allpayements as $payementinfos)
                            <tr>
                                <td>
                                    <img src="{{ asset('img/undraw_profile.svg') }}" alt="" srcset="">
                                    <p>Barry Allen</p>
                                </td>
                                <td>{{ $payementinfos->date_payement }}</td>
                                <td><span class="status {{ $payementinfos->payement_status }}">{{ $payementinfos->payement_status }}</span></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="todo">
                <div class="head">
                    <h3>A faire</h3>
                    <i class="bx bx-plus"></i>
                    <i class="bx bx-filter"></i>
                </div>
                <ul class="todo-list">
                    <li class="completed">
                        <p>Taches</p>
                        <i class="bx bx-dots-vertical-rounded"></i>
                    </li>
                    <li class="completed">
                        <p>Taches</p>
                        <i class="bx bx-dots-vertical-rounded"></i>
                    </li>
                    <li class="not-completed">
                        <p>Taches</p>
                        <i class="bx bx-dots-vertical-rounded"></i>
                    </li>
                    <li class="completed">
                        <p>Taches</p>
                        <i class="bx bx-dots-vertical-rounded"></i>
                    </li>
                    <li class="not-completed">
                        <p>Taches</p>
                        <i class="bx bx-dots-vertical-rounded"></i>
                    </li>
                    <li class="completed">
                        <p>Taches</p>
                        <i class="bx bx-dots-vertical-rounded"></i>
                    </li>
                </ul>
            </div>
        </div>
    </main>
</section>
@endsection