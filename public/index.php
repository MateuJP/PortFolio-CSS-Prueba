<?php 

require_once __DIR__ . '/../includes/app.php';

use Controllers\InicioController;
use MVC\Router;

$router = new Router();

$router->get ('/', [InicioController::class,'index']);

$router->get('/contactar',[InicioController :: class,'contactar']);






// Comprueba y valida las rutas, que existan y les asigna las funciones del Controlador
$router->comprobarRutas();