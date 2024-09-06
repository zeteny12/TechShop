<?php

switch ($menu) {

    case 'Főoldal':
        require_once './reszek/menu.php';
        require_once './reszek/udvozlo.php';
        require_once './reszek/footer.php';
        require_once './index.php';
        break;

    default:
        require_once './reszek/menu.php';
        require_once './reszek/udvozlo.php';
        require_once './reszek/footer.php';
        require_once './index.php';
        break;
}