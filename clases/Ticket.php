<?php

class Ticket {
    private $titulo;
    private $descripcion;
    private $estado;

    public function __construct($titulo, $descripcion) {
        $this->titulo = $titulo;
        $this->descripcion = $descripcion;
        $this->estado = "pendiente";
    }

    public function getTitulo() {
        return $this->titulo;
    }

    public function getDescripcion() {
        return $this->descripcion;
    }

    public function getEstado() {
        return $this->estado;
    }
}