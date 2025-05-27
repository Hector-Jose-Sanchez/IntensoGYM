document.addEventListener('DOMContentLoaded', () => {
  const toggleButton = document.getElementById('toggle-btn');
  const sidebar = document.getElementById('sidebar');
  const profileBtn = document.getElementById('profile-btn');
  const profileMenu = document.getElementById('profile-menu');

  // Leer el estado guardado del menú lateral
  const isClosed = localStorage.getItem('sidebarClosed') === 'true';
  if (isClosed) {
    sidebar.classList.add('close');
    toggleButton.classList.add('rotate');
  }

  // Toggle del menú lateral
  toggleButton.addEventListener('click', () => {
    sidebar.classList.toggle('close');
    toggleButton.classList.toggle('rotate');

    const isNowClosed = sidebar.classList.contains('close');
    localStorage.setItem('sidebarClosed', isNowClosed);
  });

  // Mostrar/Ocultar el menú del perfil
  if (profileBtn && profileMenu) {
    profileBtn.addEventListener('click', (e) => {
      e.stopPropagation(); // evita que el evento burbujee
      profileMenu.classList.toggle('show');
    });

    // Cierra el menú si se hace clic fuera
    document.addEventListener('click', (e) => {
      if (!profileMenu.contains(e.target) && !profileBtn.contains(e.target)) {
        profileMenu.classList.remove('show');
      }
    });
  }
});
