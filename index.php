<?php

session_start();
require_once './Class/database.php';
$db = new Database("localhost", "root", "", "techshop");

require_once './reszek/head.php';
?>

<body>
    <?php
        require_once './reszek/menu.php';
    ?>
</body>
</html>