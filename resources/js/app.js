document.addEventListener("DOMContentLoaded", function () {
    const sidebar = document.getElementById("sidebar");
    const toggleBtn = document.getElementById("toggle-btn");
    const profileBtn = document.getElementById("profile-btn");
    const profileMenu = document.getElementById("profile-menu");

    // Alternar colapso del sidebar
    toggleBtn.addEventListener("click", function () {
        sidebar.classList.toggle("close");
        toggleBtn.classList.toggle("rotate");

        // Ajustar posición del menú de perfil
        if (sidebar.classList.contains("close")) {
            profileMenu.style.left = "70px";
        } else {
            profileMenu.style.left = "250px";
        }
    });

    // Mostrar u ocultar menú perfil
    profileBtn.addEventListener("click", function (e) {
        e.stopPropagation();
        profileMenu.classList.toggle("show");
    });

    // Ocultar al hacer clic fuera
    document.addEventListener("click", function (e) {
        if (!profileMenu.contains(e.target) && !profileBtn.contains(e.target)) {
            profileMenu.classList.remove("show");
        }
    });
});
