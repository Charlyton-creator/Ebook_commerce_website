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
                <h1>Code Packs</h1>
                <ul class="breadcrumb">
                    <li>
                        <a href="">Dashboard</a>
                    </li>
                    <li><i class="bx bx-chevron-right"></i></li>
                    <li>
                        <a class="active" href="">Codes Packs</a>
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
                    <h3>Codes Pack Promotions</h3>
                    <i class="bx bx-search"></i>
                    <i class="bx bx-filter"></i>
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>Code</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($allcodespack as $codepack)
                            <tr>
                                <td>
                                   {{--  <img src="{{ asset('img/undraw_profile.svg') }}" alt="" srcset=""> --}}
                                    <p>{{$codepack->code}}</p>
                                </td>
                                <td>
                                    <span class="status completed"><a href="/codepack/edit/{{ $codepack->id }}" style="color: white;">EDIT</a></span></td>
                                <td>
                                    <form action="/code/delete/{{ $codepack->id }}" method="post">
                                        @csrf
                                        <span class="status pending">
                                            <button type="submit" style="color: white; border:none; outline:none;background:none;">delete</button>
                                        </span>
                                    </form>    
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <a href="/addcodepack/index" class="btn">Ajouter un code promo</a>
            </div>
        </div>
    </main>
</section>
@endsection