<?php
require_once "Controller/TiendaController.php";

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');


// lee la acción
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'home'; // acción por defecto si no envían
}

$params = explode('/', $action);

$TiendaController = new TiendaController();


// determina que camino seguir según la acción
switch ($params[0]) {
    case 'home': 
        $TiendaController->showHome(); 
        break;
    /*case 'createTask': 
      $TiendaController->createTask(); 
        break;
    case 'deleteTask': 
        $TiendaController->deleteTask($params[1]); 
        break;
    case 'updateTask': 
        $TiendaController->updateTask($params[1]); 
        break;
    case 'viewTask': 
        $TiendaController->viewTask($params[1]); 
        break;*/
    default: 
        echo('404 Page not found'); 
        break;
}


?>