<?php

include 'figuraGeometrica.php';

class Cuadrado extends figuraGeometrica {


    public function __construct($tipoFigura, $lado1) {
        parent::__construct($tipoFigura, $lado1);
    }

    public function __destruct()
    {
        return "Cuadrado destruido";
    }

    public function calcularArea() {
        return $this->getLado1() * $this->getLado1();
    }

    public function calcularPerimetro() {
        return 4 * $this->getLado1();
    }

    public function __toString()
    {
        return "El tipo de figura es ". $this->getTipoFigura(). ", el lado es: ". $this->getLado1(). ", el área es: ". $this->calcularArea(). " y el perímetro es: ". $this->calcularPerimetro();
    }
}




?>