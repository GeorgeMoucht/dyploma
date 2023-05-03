<!-- <h1>Admin Panel</h1>

<h3><?php // echo $name ?></h3> -->

<div class="admin-pannel-wrapper container fl-row container">
    <div class="sidebar-wrapper col">
        <h4>Menu</h4>
        <ul class="sidebar-list">
            <li class="fl-row" onclick="toggleAdminSidebar()">
                <i class="bi bi-person-circle"></i>
                <span class="">Users</span>
                <i class="bi bi-caret-right-fill" id="usersArrow"></i>
            </li>
            <ul class="collapse-list" id="usersCollapse">
                <li><a href="/users_management">Users</a></li>
                <li>Admins</li>
            </ul>
            <li class="fl-row">
                dsafasd
            </li>
        </ul>
    </div>
    <div class="main-wrapper col">
        Main
    </div>
</div>