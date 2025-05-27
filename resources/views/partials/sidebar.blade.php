<nav id="sidebar">
  <ul>
    <li>
      <button id="toggle-btn">
        <svg xmlns="http://www.w3.org/2000/svg" height="24" width="24" fill="#e8eaed">
          <path d="M10.5 17.3 9.45 16.25 13.7 12 9.45 7.75 10.5 6.7l5.3 5.3Z"/>
        </svg>
      </button>
    </li>
    <li>
      <a href="{{ url('/') }}">
        <svg xmlns="http://www.w3.org/2000/svg" height="24" width="24" fill="#e8eaed">
          <path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z"/>
        </svg>
        <span>Inicio</span>
      </a>
    </li>
    <li>
      <a href="{{ url('/tienda') }}">
        <svg xmlns="http://www.w3.org/2000/svg" height="24" width="24" fill="#e8eaed">
          <path d="M16 6V4a4 4 0 00-8 0v2H4v14h16V6h-4zM10 4a2 2 0 114 0v2h-4V4z"/>
        </svg>
        <span>Tienda</span>
      </a>
    </li>

    <!-- Perfil -->
    <li class="profile-section">
      <button id="profile-btn">
        <svg xmlns="http://www.w3.org/2000/svg" height="24" width="24" fill="#e8eaed">
          <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
        </svg>
        <span>Perfil</span>
      </button>

      <div id="profile-menu">
        @auth
          <div>Hola, {{ Auth::user()->name }}</div>
          <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit">Cerrar sesión</button>
          </form>
        @else
          <a href="{{ route('login') }}">Iniciar sesión</a>
          <a href="{{ route('register') }}">Crear cuenta</a>
        @endauth
      </div>
    </li>
  </ul>
</nav>
