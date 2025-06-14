document.addEventListener("DOMContentLoaded", function () {
    const sidebar = document.getElementById("sidebar");
    const toggleBtn = document.getElementById("toggle-btn");
    const profileBtn = document.getElementById("profile-btn");
    const profileMenu = document.getElementById("profile-menu");

    function positionProfileMenu() {
        const btnRect = profileBtn.getBoundingClientRect();

        profileMenu.style.top = `${btnRect.top + window.scrollY}px`;
        profileMenu.style.left = `${btnRect.right + 10}px`; // margen de 10px a la derecha del botón
    }

    toggleBtn.addEventListener("click", function () {
        sidebar.classList.toggle("close");
        toggleBtn.classList.toggle("rotate");
    });

    profileBtn.addEventListener("click", function (e) {
        e.stopPropagation();
        profileMenu.classList.toggle("show");
        if (profileMenu.classList.contains("show")) {
            positionProfileMenu();
        }
    });

    document.addEventListener("click", function (e) {
        if (!profileMenu.contains(e.target) && !profileBtn.contains(e.target)) {
            profileMenu.classList.remove("show");
        }
    });

    window.addEventListener("scroll", function () {
        if (profileMenu.classList.contains("show")) {
            positionProfileMenu();
        }
    });

    window.addEventListener("resize", function () {
        if (profileMenu.classList.contains("show")) {
            positionProfileMenu();
        }
    });

    // 👇 Reproducción automática del video al cargar la página
    const video = document.getElementById("inicio-video");
    if (video) {
        video.currentTime = 0;
        video.play().catch(function (e) {
            console.warn("Autoplay falló:", e);
        });
    }
});
