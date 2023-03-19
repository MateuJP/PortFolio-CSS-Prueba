<?php

namespace Model;

class Autor extends ActiveRecord {
    protected static $tabla = 'AUTOR';
    protected static $columnasDB=['idAutor','nom','llinatge','email','telefono','password'];
    protected static $columnaId='idAutor';
    public $idAutor;
    public $nom;
    public $llinatge;
    public $email;
    public $telefono;
    public $password;

    public function __construct($args=[]){
        $this->idAutor=$args['idAutor'] ?? null;
        $this->nom=$args['nom']?? '';
        $this->llinatge=$args['llinatge']?? '';
        $this->email=$args['email']?? '';
        $this->telefono=$args['telefono']?? '';
        $this->password=$args['password']?? '';
    }

      //Función Encargada de Hashear los Password

      public function hashPassword(){
        $this->password=password_hash($this->password,PASSWORD_BCRYPT);
    }


    public function comprobarExistencia(){
        $query="SELECT * FROM ".self::$tabla. " WHERE email ='".$this->email." ' LIMIT 1 ";
        $resultado=mysqli_query(self::$db,$query);
       
        return $resultado;
    }

    public function validarLogin(){
        if(!$this->email){
            self::$alertas['error'][]='El e-mail es obligatorio';
        }
        if(!$this->password){
            self::$alertas['error'][]='La Contraseña es obligatoria';
        }
        return self::$alertas;

    }
    public function verificarPassword($password){
        //comprobamos que el password es correcto
        //$correcto=password_verify($password,$this->password);
        if(strcmp($password,$this->password)==0){
            return true;
        }
        return false;

        /*
        if(!$correcto ){
            self::$alertas['error'][]='La Contraseña no es Correcta';
        }
        
        else{
            return true;
        }
        */
    }


}