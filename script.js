// Obtener el icono del menú, el menú y el contenido
const menuIcon = document.getElementById('menu-icon');
const menu = document.getElementById('menu');
const content = document.getElementById('content');

// Función para abrir y cerrar el menú
menuIcon.addEventListener('click', () => {
    // Alternar la clase "open" en el menú
    menu.classList.toggle('open');

    // Alternar la clase "blurred" en el contenido para desenfocar
    content.classList.toggle('blurred');
});

// Función para cerrar el menú cuando se hace clic en el contenido desenfocado
content.addEventListener('click', () => {
    if (menu.classList.contains('open')) {
        // Cerrar el menú y quitar el desenfoque
        menu.classList.remove('open');
        content.classList.remove('blurred');
    }
});
