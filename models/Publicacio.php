<?php
namespace Model;

class Publicacio extends ActiveRecord{

    protected static $tabla = 'PUBLICACIO';
    protected static $columnasDB=['idPublicacio','titol','fecha','hora','text','idAutor'];
    protected static $columnaId='idPublicacio';
    public $idPublicacio;
    public $titol;
    public $fecha;
    public $hora;
    public $text;
    public $idAutor;

    public function __construct($args=[]){
        $this->idAutor=$args['idAutor'] ?? null;
        $this->titol=$args['titol']?? '';
        $this->fecha=$args['fecha']?? '';
        $this->hora=$args['hora']?? '';
        $this->text=$args['text']?? '';
        $this->idAutor=$args['idAutor']?? '';
    }
}