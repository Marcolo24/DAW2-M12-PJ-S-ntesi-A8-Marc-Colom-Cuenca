<?php

session_start();

if(!isset($_SESSION['figura'])) {
    header('location:./index.php');
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php

if(isset($_POST['lado1'])) {
    $_SESSION['lado1'] = $_POST['lado1'];
}

if(isset($_POST['lado2'])) {
    $_SESSION['lado2'] = $_POST['lado2'];
}

if(isset($_POST['lado3'])) {
    $_SESSION['lado3'] = $_POST['lado3'];
}

echo '<h1>Resultados de '.$_SESSION['figura']. '</h1>';


switch($_SESSION['figura']) {
    case 'Circulo':
        include 'Clases/Circulo.php';
        $circulo = new Circulo($_SESSION['figura'], $_SESSION['lado1']);
        echo $circulo;
        break;
    case 'Triangulo':
        include 'Clases/Triangulo.php';
        $triangulo = new Triangulo($_SESSION['figura'], $_SESSION['lado1'], $_SESSION['lado2'], $_SESSION['lado3']);
        echo $triangulo;
        break;
    case 'Cuadrado':
        include 'Clases/Cuadrado.php';
        $cuadrado = new Cuadrado($_SESSION['figura'], $_SESSION['lado1']);
        echo $cuadrado;
        break;
    case 'Rectangulo':
        include 'Clases/Rectangulo.php';
        $rectangulo = new Rectangulo($_SESSION['figura'], $_SESSION['lado1'], $_SESSION['lado2']);
        echo $rectangulo;
        break;
}

?>

<br><br>
<form action="index.php">
    <input type="submit" value="Inicio" class="btn btn-primary">
</form>
<br>
<form action="./formulario.php">
    <input type="submit" value="Volver" class="btn btn-secondary">
</form>

</body>
</html>