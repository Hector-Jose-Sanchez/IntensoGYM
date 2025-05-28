<nav id="sidebar" class="close">
    <!-- Botón para alternar el menú -->
    <button id="toggle-btn">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
             stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M15 19l-7-7 7-7" />
        </svg>
    </button>

    <!-- Enlaces del menú -->
    <ul>
        <li>
            <a href="{{ route('home') }}">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M3 9.75L12 4l9 5.75v9.25a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V9.75z" />
                </svg>
                <span>Inicio</span>
            </a>
        </li>
        <li>
            <a href="{{ route('tienda') }}">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M3 3h18l-1.5 9H4.5L3 3zM4.5 21a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zm13.5 0a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
                </svg>
                <span>Tienda</span>
            </a>
        </li>
    </ul>

    <!-- Botón perfil (siempre visible) -->
    <div class="profile-section">
        <button id="profile-btn">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                 stroke="currentColor" width="24" height="24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M5.121 17.804A13.937 13.937 0 0 1 12 16c2.5 0 4.847.655 6.879 1.804M15 11a3 3 0 1 0-6 0 3 3 0 0 0 6 0z" />
            </svg>
            <span>
                @auth
                    {{ Auth::user()->name }}
                @else
                    Perfil
                @endauth
            </span>
        </button>
    </div>
</nav>

<!-- Menú de perfil (fuera del sidebar, alineado al botón) -->
<div id="profile-menu" class="profile-menu-outside">
    @auth
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit">Cerrar sesión</button>
        </form>
    @else
        <a href="{{ route('login') }}">Iniciar sesión</a>
        <a href="{{ route('register') }}">Crear cuenta</a>
    @endauth
</div>

