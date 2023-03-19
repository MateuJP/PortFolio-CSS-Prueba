<?php

namespace Controllers;
use MVC\Router;
class InicioController {
    public static function index (Router $router){
        $router->render('Inicio/inicial');
    }
    public static function contactar(Router $router){
        $router->render('Inicio/contactar');
    }

    public static function aboutMe(Router $router){
        $router->render('Inicio/sobreMi');
    }
}