document.addEventListener('DOMContentLoaded', () => {
  const toggleButton = document.getElementById('toggle-btn');
  const sidebar = document.getElementById('sidebar');

  // Leer el estado guardado del menú
  const isClosed = localStorage.getItem('sidebarClosed') === 'true';
  if (isClosed) {
    sidebar.classList.add('close');
    toggleButton.classList.add('rotate');
  }

  // Al hacer clic en el botón de toggle
  toggleButton.addEventListener('click', () => {
    sidebar.classList.toggle('close');
    toggleButton.classList.toggle('rotate');

    // Guardar estado en localStorage
    const isNowClosed = sidebar.classList.contains('close');
    localStorage.setItem('sidebarClosed', isNowClosed);
  });
});
