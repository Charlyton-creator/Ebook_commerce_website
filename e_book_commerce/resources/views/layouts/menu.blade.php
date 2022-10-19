        <div class="header-2">
            <a href="" class="logo"> <i class="fas fa-book"></i> COOKFAST</a>
            <nav class="navbar">
                <a href="{{ route('home') }}">Home</a>
                <a href="{{ route('ebooks') }}">Nos E-Books</a>
                <a href="{{ route('publicités') }}">Publications</a>
                <a href="{{ route('abonnements') }}">Abonnements</a>
                <a href="#about">A Propos de COOKFAST</a>
                @if(!Session::has('user'))
                    <a href="{{ route('authaction') }}" >S'authentifier</a>
                @else
                    <a href="{{ route('logout') }}">Se deconnecter</a>
                    {{-- <a href="{{ route('my') }}">Se deconnecter</a> --}}
                @endif
            </nav>
            <div class="icons">
                <div id="search-btn" class="fas fa-search"></div>
                <a href="{{ route('mycart') }}" class="fas fa-shopping-cart"><span>0</span></a>
            </div>
        </div>