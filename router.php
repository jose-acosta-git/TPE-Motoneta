<?php
 
define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

include_once 'app/controllers/profession.controller.php';
include_once 'app/controllers/auth.controller.php';
//phpinfo();
if (!empty($_GET['action'])) {
    $iniciar = $_GET['action'];
} else {
    $iniciar = 'home'; // inicio acción por defecto si no envían
}

$params = explode('/', $iniciar);
switch ($params[0]) {
    //lama al controlador para pasarle la accion correspondiente
    case 'home':
        $controller = new ClientController();
        $controller->showHome();
    break;      
    default:
        header("HTTP/1.0 404 Not Found");
        echo('404 Page not found');
    break;
} 