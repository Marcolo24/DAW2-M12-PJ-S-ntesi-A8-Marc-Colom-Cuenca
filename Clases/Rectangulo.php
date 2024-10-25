<?php

include 'figuraGeometrica.php';

class Rectangulo extends figuraGeometrica {
    protected $lado2;

    public function __construct($tipoFigura,$lado1,$lado2) {
        parent::__construct($tipoFigura,$lado1);
        $this->lado2 = $lado2;
    }
    public function __destruct()
    {
        return "Rectangulo destruido";
    }

    public function getLado2() {
        return $this->lado2;
    }

    public function setLado2($lado2) {
        $this->lado2 = $lado2;
    }

    public function calcularArea() {
        return $this->getLado1() * $this->getLado2();
    }

    public function calcularPerimetro() {
        return 2 * ($this->getLado1() + $this->getLado2());
    }

    public function __toString()
    {
        return "El tipo de figura es ". $this->getTipoFigura(). ", los lados son: ". $this->getLado1(). ", ". $this->getLado2(). ", el área es: ". $this->calcularArea(). " y el perímetro es: ". $this->calcularPerimetro();
    }
}


