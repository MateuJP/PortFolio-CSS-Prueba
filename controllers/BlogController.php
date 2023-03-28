<?php

namespace Controllers;

use Model\ActiveRecord;
use Model\Publicacio;
use MVC\Router;
use Intervention\Image\ImageManagerStatic as Image;


class BlogController{

    public static function ver(Router $router){
        $router->render('blog/blog');

    }
    public static function publicar(Router $router){
        isAuth();

        if($_SERVER['REQUEST_METHOD']=='POST'){
            $titulo=$_POST['titulo'];
            $text=$_POST['texto'];
            $text = str_replace("salto", "<br>", $text);

            $num=$_POST['numImagenes'];
            $i=0;
            while($i<$num){
                $imagen=$_FILES['imagen {i}'];
                //Generamos un nombre único para la imagen
                $nombre_imagen=md5(uniqid( rand(), true ) ) . ".jpg";
                //Subimos la imagen al Servidor
                $imagen=Image::make($_FILES['foto']['tmp_name'])->fit(800,600);
                //Guardamos la imagen
                if(!is_dir(CARPETA_IMAGENES)){
                    mkdir(CARPETA_IMAGENES);
                }
                $imagen->save(CARPETA_IMAGENES . $nombre_imagen);
                $text = str_replace("imagen {i}", "<img src = '$nombre_imagen'> </img>", $text);
            }
            $autor=($_POST['Autor']);
            $idAutor=$autor['opciones'];
            $fecha_actual = date('d/m/Y');
            $hora_actual = date('h:i A');
            $publicacio=new Publicacio();
            $publicacio->titol=$titulo;
            $publicacio->text=$text;
            $publicacio->idAutor=$idAutor;
            $publicacio->fecha=$fecha_actual;
            $publicacio->hora=$hora_actual;
            $publicacio->guardar($publicacio->idPublicacio);
        }
        $router->render('blog/publicar');
    }
}