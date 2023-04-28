const subMenu = document.getElementById('dropDownMenu');
const adminPannelUserCollapse = document.getElementById('usersCollapse');
const usersArrow = document.getElementById('usersArrow');

subMenu.addEventListener('click', function(event) {
    event.stopPropagation();
});

function toggleMenu() {
    subMenu.classList.toggle('show-navigation');
}

function closeToggleMenu() {
    subMenu.classList.remove('show-navigation');
}

function toggleAdminSidebar() {
    if(adminPannelUserCollapse.classList.contains("show")) {
        adminPannelUserCollapse.classList.remove('show');
        usersArrow.style.transform = "rotate(0deg)";
    } else {
        adminPannelUserCollapse.classList.add('show');
        usersArrow.style.transform = "rotate(90deg)";
    }
}
