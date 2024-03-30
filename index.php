<?php

include_once './config.php';
include_once './app/controllers/UserController.php';

$url = isset($_GET['url']) ? $_GET['url'] : 'users';
switch ($url) {
    case 'users':
        $controller = new UserController($conn);
        $controller->index();
        break;
    case 'users/create':
        $controller = new UserController($conn);
        $controller->create();
    case 'users/edit':
        $controller = new UserController($conn);
        $controller->edit();
    case 'users/delete':
        $controller = new UserController($conn);
        $controller->delete();
    default:
        echo '404 Not Found';
        break;
}
