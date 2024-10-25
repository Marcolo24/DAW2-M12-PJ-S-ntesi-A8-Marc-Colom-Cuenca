<?php

class figuraGeometrica {
    private $tipoFigura;
    private $lado1;

protected function __construct($tipoFigura, $lado1) {
    $this->tipoFigura = $tipoFigura;
    $this->lado1 = $lado1;
}

protected function getTipoFigura() {
    return $this->tipoFigura;
}

protected function getLado1() {
    return $this->lado1;
}

protected function setTipoFigura($tipoFigura) {
    $this->tipoFigura = $tipoFigura;
}

protected function setLado1($lado1) {
    $this->lado1 = $lado1;
}

protected function __destruct()
{
    echo "Objeto de la clase figuraGeometrica destruido";
}

protected function calcularArea() {
    return "Método sobreescrito para figuras geométricas";
}

}

?>