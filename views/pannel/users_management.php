<div class="admin-pannel-wrapper container fl-row container">
    <div class="sidebar-wrapper col">
        <h4>Menu</h4>
        <ul class="sidebar-list">
            <li>
                <a href="/admin_panel" class="fl-row">
                    <i class="bi bi-shield"></i>
                    <span class="dash">Dashboard</span>                            
                </a>
            </li>
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
        <h2>Users</h2>
        <div class="users-list-wrapper block">
            asdf
            <table>
                <?php  ?>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Create Date</th>
                    <th>Actions</th>
                </tr>


                <tr>
                    <th>Exmp id</th>
                    <th>Ex.Name</th>
                    <th>ex.Email</th>
                    <th>ex.Create date</th>
                    <th>
                        <button class="ad-btn-edit">Edit</button>
                        <button class="ad-btn-delete">Delete</button>
                    </th>
                </tr>
                                
                <tr>
                    <th>Exmp id</th>
                    <th>Ex.Name</th>
                    <th>ex.Email</th>
                    <th>ex.Create date</th>
                    <th>
                        <button class="ad-btn-edit">Edit</button>
                        <button class="ad-btn-delete">Delete</button>
                    </th>
                </tr>
                                
                <tr>
                    <th>Exmp id</th>
                    <th>Ex.Name</th>
                    <th>ex.Email</th>
                    <th>ex.Create date</th>
                    <th>
                        <button class="ad-btn-edit">Edit</button>
                        <button class="ad-btn-delete">Delete</button>
                    </th>
                </tr>
            </table>
        </div>
    </div>
</div>