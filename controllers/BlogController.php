<?php

namespace Controllers;

use MVC\Router;

class BlogController{
    public static function publicar(Router $router){
        isAuth();
        $router->render('blog/publicar');
    }
}