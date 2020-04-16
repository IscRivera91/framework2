<?php

class controlador_srv{
    public $link;
    public $errores;
    public $tabla;
    public $tabla_modelo;

    public function __construct(database $link,string $nombre_tabla=null){

        $this->link = $link;
        $this->errores = new errores();

        if (!is_null($nombre_tabla)){

            $this->set_tabla($nombre_tabla);

        }

    }

    public function set_tabla(string $nombre_tabla){
        $this->tabla = $nombre_tabla;
        $this->tabla_modelo = crear_modelo($this->tabla,$this->link);
    }



}