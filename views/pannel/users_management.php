<?php use \app\core\table\Table; ?>

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
        <div class="users-list-wrapper">
            <div class="column">
                <?php $table = new Table($users, $tableAttributes); ?>
                <?php echo $table->generate(); ?>
            </div>
            <div class="column">
                <table>
                    <tr>
                        <th>Actions</th>
                    </tr>
                    <?php
                        $usersCount = count($users);
                        if(count($users) != 0) {
                            foreach($users as $value) {
                                echo '
                                    <tr>
                                        <td>
                                            <button class="ad-btn-edit">Edit</button>
                                            <button class="ad-btn-delete">Delete</button>
                                        </td>
                                    </tr>
                                ';
                            }
                        }
                    ?>
                </table>
            </div>
 
        </div>
        <!-- <div class="users-list-wrapper block">

    
            <table>
                <tr>
                    <th>ID</td>
                    <th>Name</td>
                    <th>Email</td>
                    <th>Create Date</td>
                    <th>Actions</td>
                </tr>


                <tr>
                    <td>Exmp id</td>
                    <td>Ex.Name</td>
                    <td>ex.Email</td>
                    <td>ex.Create date</td>
                    <td>
                        <button class="ad-btn-edit">Edit</button>
                        <button class="ad-btn-delete">Delete</button>
                    </td>
                </tr>
                                
                <tr>
                    <td>Exmp id</td>
                    <td>Ex.Name</td>
                    <td>ex.Email</td>
                    <td>ex.Create date</td>
                    <td>
                        <button class="ad-btn-edit">Edit</button>
                        <button class="ad-btn-delete">Delete</button>
                    </td>
                </tr>
                                
                <tr>
                    <td>Exmp id</td>
                    <td>Ex.Name</td>
                    <td>ex.Email</td>
                    <td>ex.Create date</td>
                    <td>
                        <button class="ad-btn-edit">Edit</button>
                        <button class="ad-btn-delete">Delete</button>
                    </td>
                </tr>
            </table>
        </div> -->
    </div>
</div>