
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Konrad</title>
    <link rel="stylesheet" href="<?php SERVER_URL ?>views/css/app.css">
</head>
<body id="app-style">
    <!-- NavBar -->
    <?php include "views/layouts/navbar.php" ?>

    <section>
        <?php //include "views/register.php" ?>
        <?php //include "views/login.php" ?>
        <?php 
            require_once "libs/app.php";
            $app = new App();
        ?>
    </section>

    <!-- Scripts -->
    <?php include "views/layouts/scripts.php" ?>
    <!-- <script src="<?php SERVER_URL ?>views/js/app.js"></script>
    <script src="<?php SERVER_URL ?>views/js/register.js"></script> -->
</body>
</html>