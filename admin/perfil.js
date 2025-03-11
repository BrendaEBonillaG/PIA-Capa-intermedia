// JavaScript para abrir y cerrar el menú desplegable
const menuButton = document.getElementById("menu-button");
const dropdownMenu = document.getElementById("dropdown-menu");

menuButton.addEventListener("click", () => {
    dropdownMenu.classList.toggle("hidden");
});

// Cerrar el menú al hacer clic fuera
window.addEventListener("click", (e) => {
    if (!menuButton.contains(e.target) && !dropdownMenu.contains(e.target)) {
        dropdownMenu.classList.add("hidden");
    }
});