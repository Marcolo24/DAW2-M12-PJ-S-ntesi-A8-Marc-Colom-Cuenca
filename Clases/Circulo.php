<?php

include 'figuraGeometrica.php';

class Circulo extends figuraGeometrica {


    public function __construct($tipoFigura,$lado1) {
        parent::__construct($tipoFigura,$lado1);
    }

    public function __destruct()
    {
        return "Circulo destruido";
    }

    public function calcularArea() {
        return M_PI * pow($this->getLado1(), 2);
    }

    public function calcularPerimetro() {
        return 2 * M_PI * $this->getLado1();
    }

    public function __toString()
    {
        return "El tipo de figura es ". $this->getTipoFigura(). ", el radio es: ". $this->getLado1(). ", el área es: ". $this->calcularArea(). " y el perímetro es: ". $this->calcularPerimetro();
    }
}

?>