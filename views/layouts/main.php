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
    <link rel="stylesheet" href="stylesheets/main.css">
</head>
<body>
    <div class="navigation container fl-row">
        <div class="logo col">
            <span>LOGO</span>
        </div>
        <div class="menu col">
            <ul class="menu-list">
                <li>Home</li>
                <li>Home</li>
                <li>Home</li>
                <li>Home</li>
            </ul>
        </div>
        
        <div class="burger-icon col">
            <button class="hamburger">
                <div class="bar"></div>
            </button>
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