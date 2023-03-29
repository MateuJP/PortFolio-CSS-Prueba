<?php

namespace Controllers;

use Model\ActiveRecord;
use Model\Publicacio;
use MVC\Router;
use Intervention\Image\ImageManagerStatic as Image;


class BlogController{

    public static function ver(Router $router){
        $numPaginas=0;
        $hidenPag=true;
        $limit=3;
        $resultado=Publicacio::all();
        $numPaginas=(ceil(count ($resultado))/$limit);
        if ($numPaginas>1){
            $hidenPag=false;
        
            $limitInf=(($_GET['pagina']??1)-1)*$limit;
            $publicaciones=[];
            $j=0;
            $k=$limitInf+$limit;

            for($i=$limitInf;$i<$k;$i++){
                $publicaciones[$j]=$resultado[$k-1];
                $j+=1;
            }
        }else{
            $publicaciones=$resultado;
        }
        
        $router->render('blog/blog',[
            'numPaginas'=>$numPaginas,
            'hidenPag'=>$hidenPag,
            'publicaciones'=>$publicaciones
        ]);
        

    }
    public static function articulo(Router $router){
        $router->render('blog/articulo');
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
                $nombre='imagen'.'_'.$i;
                $imagen=$_FILES[$nombre];
                //Generamos un nombre único para la imagen
                $nombre_imagen=md5(uniqid( rand(), true ) ) . ".jpg";
                //Subimos la imagen al Servidor
                $imagen=Image::make($_FILES[$nombre]['tmp_name'])->fit(800,600);
                //Guardamos la imagen
                if(!is_dir(CARPETA_IMAGENES)){
                    mkdir(CARPETA_IMAGENES);
                }
                $imagen->save(CARPETA_IMAGENES . $nombre_imagen);
                $text = str_replace($nombre, "<img src = 'imagenes/$nombre_imagen'> </img>", $text);
                $i=$i+1;
            }
            $autor=($_POST['Autor']);
            $idAutor=$autor['opciones'];
            $fecha_actual = date('d/m/Y');
            $hora_actual = date('H:i A');
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