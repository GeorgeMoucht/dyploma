<?php
    use app\core\Application;
?>
<div class="global-wrapper">
    <!-- Header -->
    <div class="profile-header container fl-col block">
        <div class="col container fl-row">
            <img class="profile-image" src="images/default-avatar.png" alt="Profile image">
            <h2 class="name">
                <?php echo Application::$app->user->getDisplayName(); ?>
            </h2>
        </div>
        <div class="col">
            <ul class="bookmark-section fl-row">
                <li>
                    <a href="">Dashboard</a>
                </li>/
                <li>
                    <a href="/profile">Profile</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- End of Header -->

    <div class="main-content container fl-row">
        <div class="col fl-col" style="border: 1px solid black;">
            <div class="user-details col block">
                User details
            </div>
        </div>
        <div class="col block" style="border: 1px solid black;">
            2
        </div>
    </div>
</div>
