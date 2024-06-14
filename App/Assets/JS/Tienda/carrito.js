document.addEventListener('DOMContentLoaded', function() {
    const toggleCarrito = document.getElementById('toggle-carrito');
    const carrito = document.getElementById('carrito');

    // Función para alternar la visibilidad del menú desplegable del carrito
    function toggleMenu() {
        if (carrito.style.display === 'block') {
            carrito.style.display = 'none';
        } else {
            carrito.style.display = 'block';
        }
    }

    // Alternar visibilidad del menú al hacer clic en el icono del carrito
    toggleCarrito.addEventListener('click', function() {
        toggleMenu();
    });
});