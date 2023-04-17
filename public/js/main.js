const subMenu = document.getElementById('dropDownMenu');

function toggleMenu() {
    subMenu.classList.toggle('show-navigation');
}

function closeToggleMenu() {
    subMenu.classList.remove('show-navigation');
}