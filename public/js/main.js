const subMenu = document.getElementById('dropDownMenu');

subMenu.addEventListener('click', function(event) {
    event.stopPropagation();
});

function toggleMenu() {
    subMenu.classList.toggle('show-navigation');
}

function closeToggleMenu() {
    subMenu.classList.remove('show-navigation');
}