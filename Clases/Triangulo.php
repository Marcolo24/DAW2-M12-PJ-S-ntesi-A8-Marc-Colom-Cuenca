<?php

include 'figuraGeometrica.php';

class Triangulo extends figuraGeometrica {
    private $lado2;
    private $lado3;

    public function __construct($tipoFigura,$lado1,$lado2,$lado3) {
        parent::__construct($tipoFigura,$lado1);
        $this->lado2 = $lado2;
        $this->lado3 = $lado3;
    }

public function __destruct()
{
    return "Triangulo destruido";
}

    public function getLado2() {
        return $this->lado2;
    }

    public function getLado3() {
        return $this->lado3;
    }

    public function setLado2($lado2) {
        $this->lado2 = $lado2;
    }
    
    public function setLado3($lado3) {
        $this->lado3 = $lado3;
    }
    public function calcularArea() {
        $a = $this->getLado1();
        $b = $this->getLado2();
        $c = $this->getLado3();

        // Calcula el semiperímetro
        $s = ($a + $b + $c) / 2;

        // Calcula el área usando la fórmula de Herón
        $area = sqrt($s * ($s - $a) * ($s - $b) * ($s - $c));
        return $area;
    }

    public function calcularPerimetro() {
        return $this->getLado1() + $this->getLado2() + $this->getLado3();
    }

    public function __toString() {
        return "El tipo de figura es ". $this->getTipoFigura(). ", los lados son: ". $this->getLado1(). ", ". $this->getLado2(). ", ". $this->getLado3(). ", el área es: ". $this->calcularArea(). " y el perímetro es: ". $this->calcularPerimetro();
    }

}
