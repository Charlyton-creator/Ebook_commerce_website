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
                <h1>E-Books</h1>
                <ul class="breadcrumb">
                    <li>
                        <a href="">Dashboard</a>
                    </li>
                    <li><i class="bx bx-chevron-right"></i></li>
                    <li>
                        <a class="active" href="">E-books</a>
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
                    <h3>E-Books Disponibles</h3>
                    <i class="bx bx-search"></i>
                    <i class="bx bx-filter"></i>
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>Libelle</th>
                            <th>Description</th>
                            <th>flip_book_link</th>
                            <th>Fichier Ebook</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($allebooks as $ebook)
                            <tr>
                                <td>
                                   {{--  <img src="{{ asset('img/undraw_profile.svg') }}" alt="" srcset=""> --}}
                                    <p>{{$ebook->libelle}}</p>
                                </td>
                                <td>{{$ebook->description}}</td>
                                <td>{{$ebook->flip_book_link}}</td>
                                <td>{{$ebook->ebook_document}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </main>
</section>
@endsection