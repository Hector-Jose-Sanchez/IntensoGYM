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
  </ul>
</nav>
