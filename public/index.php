<?php 

require_once __DIR__ . '/../includes/app.php';

use Controllers\BlogController;
use Controllers\InicioController;
use Controllers\LoginController;
use MVC\Router;

$router = new Router();

$router->get ('/', [InicioController :: class,'index']);

$router->get('/contactar',[InicioController :: class,'contactar']);


$router->get('/about',[InicioController :: class,'aboutMe']);



//LOGIN

$router->get('/login',[LoginController :: class,'login']);
$router->POST('/login',[LoginController::class,'login']);


//BLOG

$router->get('/publicar',[BlogController :: class,'publicar']);
$router->post('/publicar',[BlogController :: class,'publicar']);

$router->get('/blog',[BlogController :: class,'ver']);
$router->get('/articulo',[BlogController :: class,'articulo']);




// Comprueba y valida las rutas, que existan y les asigna las funciones del Controlador
$router->comprobarRutas();