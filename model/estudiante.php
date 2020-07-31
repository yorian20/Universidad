<?php

class Estudiante {
private $cedula;
private $nombre;
private $edad;

function __construct($cedula, $nombre, $edad) {
    $this->cedula = $cedula;
    $this->nombre = $nombre;
    $this->edad = $edad;
}
function getCedula() {
    return $this->cedula;
}

function getNombre() {
    return $this->nombre;
}

function getEdad() {
    return $this->edad;
}

function setCedula($cedula) {
    $this->cedula = $cedula;
}

function setNombre($nombre) {
    $this->nombre = $nombre;
}

function setEdad($edad) {
    $this->edad = $edad;
}



}