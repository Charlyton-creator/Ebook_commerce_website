<section id="sidebar">
    <a href="http://" class="brand">
        <i class='bx bxs-book'></i>
        <span class="text">COOKFAST</span>
    </a>
   @if (session('user') && auth()->user()->has_abonnement == 1)
    <ul class="side-menu top">
        <li class="active">
            <a href="http://">
                <i class='bx bxs-dashboard' ></i>
                <span class="text">Dashboard</span>
            </a>
        </li>
        <li>
            <a href="http://">
                <i class='bx bxs-shopping-bag-alt'></i>
                <span class="text">My Store</span>
            </a>
        </li>
        <li>
            <a href="http://">
                <i class='bx bxs-doughnut-chart'></i>
                <span class="text">Analytics</span>
            </a>
        </li>
        <li>
            <a href="http://">
                <i class='bx bxs-doughnut-chart'></i>
                <span class="text">Publicités</span>
            </a>
        </li>
        <li>
            <a href="http://">
                <i class='bx bxs-message' ></i>
                <span class="text">Messages</span>
            </a>
        </li>
    </ul>
    <ul class="side-menu">
        <li>
            <a href="http://">
                <i class='bx bxs-cog'></i>
                <span class="text">Settings</span>
            </a>
        </li>
        <li>
            <a href="http://" class="logout">
                <i class='bx bxs-log-out-circle'></i>
                <span class="text">Logout</span>
            </a>
        </li>
    </ul>  
   @else
    <ul class="side-menu top">
        <li class="active">
            <a href="http://">
                <i class='bx bxs-dashboard' ></i>
                <span class="text">Dashboard</span>
            </a>
        </li>
        <li>
            <a href="/abonements/all">
                <i class='bx bxs-shopping-bag-alt'></i>
                <span class="text">Abonnements</span>
            </a>
        </li>
        <li>
            <a href="http://">
                <i class='bx bxs-doughnut-chart'></i>
                <span class="text">Analytics</span>
            </a>
        </li>
        <li>
            <a href="/categories">
                <i class='bx bxs-message' ></i>
                <span class="text">Catégories Recettes</span>
            </a>
        </li>
        <li>
            <a href="{{ route('allcodes') }}">
                <i class='bx bxs-message' ></i>
                <span class="text">Codes Pack Promotions</span>
            </a>
        </li>
        <li>
            <a href="/payement/all">
                <i class='bx bxs-message' ></i>
                <span class="text">Payements</span>
            </a>
        </li>
        <li>
            <a href="http://">
                <i class='bx bxs-message' ></i>
                <span class="text">Abonenements Features</span>
            </a>
        </li>
        <li>
            <a href="/ebooks/all">
                <i class='bx bxs-message' ></i>
                <span class="text">Ebooks</span>
            </a>
        </li>
        <li>
            <a href="/news/all">
                <i class='bx bxs-message' ></i>
                <span class="text">NewsLetter</span>
            </a>
        </li>
        <li>
            <a href="/geotags/all">
                <i class='bx bxs-message'></i>
                <span class="text">GeoTag</span>
            </a>
        </li>
        <li>
            <a href="/commandes/all">
                <i class='bx bxs-message'></i>
                <span class="text">Commandes</span>
            </a>
        </li>
        <li>
            <a href="/promotions/all">
                <i class='bx bxs-message'></i>
                <span class="text">Promotions</span>
            </a>
        </li>
        <li>
            <a href="/publications/all">
                <i class='bx bxs-message'></i>
                <span class="text">Publicités</span>
            </a>
        </li>
        <li>
            <a href="/recettes/all">
                <i class='bx bxs-message'></i>
                <span class="text">Recettes</span>
            </a>
        </li>
        <li>
            <a href="/users/all">
                <i class='bx bxs-message'></i>
                <span class="text">Utilisateurs</span>
            </a>
        </li>
    </ul>
    <ul class="side-menu">
        <li>
            <a href="http://">
                <i class='bx bxs-cog'></i>
                <span class="text">Settings</span>
            </a>
        </li>
        <li>
            <a href="http://" class="logout">
                <i class='bx bxs-log-out-circle'></i>
                <span class="text">Logout</span>
            </a>
        </li>
    </ul>  
   @endif
</section>