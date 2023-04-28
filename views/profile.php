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
        <div class="col profile-col-left fl-col">
            <div class="user-details col block">
                <h3>User details</h3>
               
                <button class="btn edit-btn">Edit profile</button>
                
                <h4>Email address</h4>
                <span>
                    <?php echo Application::$app->user->getDisplayEmail(); ?>
                </span>

                <h4>Country</h4>
                <span>MyCountry</span>

                <h4>Interests</h4>
                <span>My interests</span>
            </div>
        </div>
        <div class="col profile-col-right block">
            2
        </div>
    </div>
</div>
