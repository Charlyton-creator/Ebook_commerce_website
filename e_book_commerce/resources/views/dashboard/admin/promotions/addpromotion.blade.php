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
                <h1>Promotions</h1>
                <ul class="breadcrumb">
                    <li>
                        <a href="">Dashboard</a>
                    </li>
                    <li><i class="bx bx-chevron-right"></i></li>
                    <li>
                        <a class="active" href="">Promotions</a>
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
                    <h3>Ajouter une promotion</h3>
                    <i class="bx bx-search"></i>
                    <i class="bx bx-filter"></i>
                </div>
                <table>
                    <div class="container">
                        <div class="form-box">
                            <label for="libelle">E_book concerner</label>
                            <select name="e_book" class="field">
                                <option value="All">Tous</option>
                                <option value="e_book_1">E_book 1</option>
                            </select>
                            <label for="reduction">Pourcentage de réduction</label>
                            <input type="number" name="reduction" class="field" placeholder="">
                            <label for="duree">Durée de la promotion</label>
                            <input type="date" name="duree" class="field" placeholder="">
                            <label for="etat">Etat</label>
                            <select name="" id="" class="field">
                                <option value="1">Activé</option>
                                <option value="0">Non Activé</option>
                            </select>
                            <label for="code_pack">Le code de la promotion</label>
                            <select name="" id="" class="field">
                                <option value="Code1">Code1</option>
                            </select>
                            <button class="btn">Sauvegarder</button>
                        </div>
                    </div>
                </table>
            </div>
        </div>
    </main>
</section>
@endsection