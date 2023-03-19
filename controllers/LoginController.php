<?php
namespace Controllers;

use Model\Autor;
use MVC\Router;

class LoginController {
    public static function login (Router $router){
        if($_SERVER['REQUEST_METHOD']=='POST'){
            //auth es un objeto Usuario con todos los campos null excepto e-mail y password que se llenaran 
            //con los datos del formulario
                $auth=new Autor($_POST); 
                //Sabemos que tenemos un email y una contraseña lo vamos a buscar en la base de datos
                $usuario=Autor::where('email',$auth->email);
                if($usuario){
                    //El Usuario Existe,comprobamos que esta confirmado
                        if($usuario->verificarPassword($auth->password)){
                            //INICIAMOS SESIÓN
                            session_start();
                            $_SESSION['idUsuario']=$usuario->idUsuario;
                            $_SESSION['nombre']=$usuario->nombre." " .$usuario->apellido;
                            $_SESSION['email']=$usuario->email;
                            $_SESSION['telefono']=$usuario->telefono;
                            $_SESSION['login']=true;
                        
                            header('Location: /publicar');

                        
                        }
                    
                      
                }
                
            
        }

        $router->render('blog/login');
    }
}