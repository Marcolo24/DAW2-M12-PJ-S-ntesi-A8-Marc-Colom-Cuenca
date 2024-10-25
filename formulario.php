<?php

session_start();

if(isset($_POST['figura'])) {
    $_SESSION['figura'] = $_POST['figura'];
} elseif(!isset($_SESSION['figura'])) {
    header('location:./index.php');
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introducir datos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>


<form action="./calcular.php" method="post">


<?php


switch ($_SESSION['figura']) {
    case 'Circulo':
        echo '<h1>Introduce el radio del círculo</h1>
        <div class="form-group">
        <label for="lado1">Radio: </label>
        <input class="form-control" type="number" step="0.1" id="lado1" name="lado1" value="';
        if(isset($_SESSION['lado1'])) {
            echo $_SESSION['lado1'];
        }
        echo '" required>
        </div>
        <br>
        <input type="submit" class="btn btn-primary">';
    break;
    case 'Triangulo':
        echo '<h1>Introduce los lados del triángulo</h1>
        <div class="form-group">
        <label for="lado1">Lado 1: </label>
        <input class="form-control" type="number" step="0.1" id="lado1" name="lado1" value="';
        if(isset($_SESSION['lado1'])) {
            echo $_SESSION['lado1'];
        }
        echo '" required>
        </div>
        <br>
        <div class="form-group">
        <label for="lado2">Lado 2: </label>
        <input class="form-control" type="number" step="0.1" id="lado2" name="lado2" value="';
        if(isset($_SESSION['lado2'])) {
            echo $_SESSION['lado2'];
        }
        echo '" required>
        </div>
        <br>
        <div class="form-group">
        <label for="lado3">Lado 3: </label>
        <input class="form-control" type="number" step="0.1" id="lado3" name="lado3" value="';
        if(isset($_SESSION['lado3'])) {
            echo $_SESSION['lado3'];
        }
        echo '" required>
        </div>
        <br>
        <input type="submit" class="btn btn-primary">';
    break;
    case 'Cuadrado':
        echo '<h1>Introduce el lado del cuadrado</h1>
        <div class="form-group">
        <label for="lado1">Lado: </label>
        <input class="form-control" type="number" step="0.1" id="lado1" name="lado1" value="';
        if(isset($_SESSION['lado1'])) {
            echo $_SESSION['lado1'];
        }
        echo '" required>
        </div>
        <br>
        <input type="submit" class="btn btn-primary">';
    break;
    case 'Rectangulo':
        echo '<h1>Introduce los lados del rectangulo</h1>
        <div class="form-group">
        <label for="lado1">Lado 1: </label>
        <input class="form-control" type="number" step="0.1" id="lado1" name="lado1" value="';
        if(isset($_SESSION['lado1'])) {
            echo $_SESSION['lado1'];
        }
        echo '" required>
        </div>
        <br>
        <div class="form-group">
        <label for="lado2">Lado 2: </label>
        <input class="form-control" type="number" step="0.1" id="lado2" name="lado2" value="';
        if(isset($_SESSION['lado2'])) {
            echo $_SESSION['lado2'];
        }
        echo '" required>
        </div>
        <br>
        <input type="submit" class="btn btn-primary">';
    break;
    }
?>

</form>

<br>

<form action="./index.php">
    <input type="submit" value="Volver" class="btn btn-secondary">
</form>
</body>
</html>

