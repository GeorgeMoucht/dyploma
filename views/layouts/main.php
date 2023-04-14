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
            <span>LOGO</span>
        </div>
        <div class="menu col">
            <ul class="menu-list fl-row">
                <li>Home</li>
                <li>Courses</li>
                <li>Forum</li>
            </ul>
        </div>

        <div class="image-cnt my-courses-btn col fl-row">
            <img class="profile-image" src="images/default-avatar.png" alt="Profile image">    
            <span>My Courses</span>
        </div>

        <div class="notifications col fl-col">
            <i class="bi bi-bell"></i>
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