const navbar = document.querySelector('#navbar');
const abrir = document.querySelector('#abrir');
const cerrar = document.querySelector('#cerrar');

abrir.addEventListener('click', () => {
    navbar.classList.add("visible");
});

cerrar.addEventListener('click', ()=> {
    navbar.classList.remove("visible");
});

// Selecciona el ícono de flecha
const iconoFlecha = document.querySelector('.dropdown i');

// Añade un evento de clic al ícono de flecha
iconoFlecha.addEventListener('click', () => {
    // Selecciona el menú dropdown
    const dropdownMenu = document.querySelector('.dropdown-menu');
    // Alterna la visibilidad del menú dropdown
    dropdownMenu.classList.toggle('visible-dropdown');
});


// Selecciona el ícono de flecha del menú dropdown de radio
const iconoFlechaRadio = document.querySelector('.nav__item.dropdown:last-child i');

// Añade un evento de clic al ícono de flecha del menú dropdown de radio
iconoFlechaRadio.addEventListener('click', () => {
    // Selecciona el menú dropdown de radio
    const dropdownMenuRadio = document.querySelector('.nav__item.dropdown:last-child .dropdown-menu');
    // Alterna la visibilidad del menú dropdown de radio
    dropdownMenuRadio.classList.toggle('visible-dropdown');
});
