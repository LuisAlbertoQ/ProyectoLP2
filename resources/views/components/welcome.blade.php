<header>
    <img src="/img/upeu-removebg-preview.png" alt="" class="logo" width="200px">
    <ul>
        <li><a href="/">INICIO</a></li>
        <li><a href="#ofertas">OFERTAS</a></li>
        <li><a href="#induccion">INDUCCION</a></li>
        <li><a href="#contactenos">CONTACTENOS</a></li>

        @if (Route::has('login'))
            <div class="logeo">
                @auth
                    <a href="{{ url('/dashboard') }}">Dashboard</a>

                @else
                    <a href="{{ route('login') }}">LOGIN</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">REGISTRARSE</a>

                    @endif
                @endauth
            </div>
        @endif
    </ul>


</header>
