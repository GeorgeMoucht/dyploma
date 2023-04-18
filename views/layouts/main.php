<?php
    use app\core\Application;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <link rel="stylesheet" href="stylesheets/main.css">
</head>
<body>
    <div class="navigation container fl-row">
        <div class="logo col">
            <img src="images/edu-logo.png" alt="">
        </div>
        <div class="menu col">
            <ul class="menu-list fl-row">
                <li>
                    <a href="/">Home</a>
                </li>
                <li>
                    <a href="/courses">Courses</a>
                </li>
                <li>
                    <a href="/forum">Forum</a>
                </li>
            </ul>
        </div>

        <?php if(Application::isGuest()): ?>
            <div class="menu col">
                <ul class="menu-list fl-row right-menu">
                    <li>
                        <a href="/login">Login</a>
                    </li>
                    <li>
                        <a href="/register">Register</a>
                    </li>
                </ul>
            </div>
        <?php else: ?>
            <div class="image-cnt my-courses-btn col fl-row" onclick="toggleMenu()">
                <img class="profile-image" src="images/default-avatar.png" alt="Profile image">    
                <span>My Courses</span>
            </div>

            <div class="notifications col fl-col">
                <i class="bi bi-bell"></i>
            </div>
        <?php endif; ?>
    </div>

    <div class="navigation-collapse container" id="dropDownMenu" >
        <div class="nav-coll-header container fl-row">
            <div class="profile-image col fl-row">
                <img class="profile-image" src="images/default-avatar.png" alt="Profile image">    
            </div>
            <div class="nav-coll-menu col fl-col">
                <h2 class="col full-name">Full Name</h2>
                <div class="col menu-list">
                    <a href="">Profile</a>
                    <span>-</span>
                    <a href="">Dashboard</a>
                    <span>-</span>
                    <a href="">Grades</a>
                    <span>-</span>
                    <a href="">Preferences</a>
                    <span>-</span>
                    <a href="">Log out</a>
                </div>
            </div>
            <div class="close-coll-navigation col">
                <div class="close-cnt fl-col" onclick="closeToggleMenu()">
                    <i class="bi bi-x-lg"></i>
                    Close
                </div>
            </div>
        </div>


    </div>



    <?php if (Application::$app->session->getFlash('success')):  ?>
        <div class="alert alert-success" role="alert">
            <?php echo Application::$app->session->getFlash('success'); ?>
        </div>
    <?php endif; ?>
    {{content}}


    
    <script src="js/main.js"></script>
</body>
</html>