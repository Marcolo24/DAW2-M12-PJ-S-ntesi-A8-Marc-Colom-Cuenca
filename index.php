<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escojer figura</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php 

session_start();


?>
    <h1>Calcular area y perimetro</h1>
    <p>Selecciona la <strong>forma geometrica:</strong></p>
    <form action="./formulario.php" method="post">
    <div class="form-check">
        <input class="form-check-input" type="radio" name="figura" id="Circulo" value="Circulo" <?php if(isset($_SESSION['figura']) && $_SESSION['figura'] == "Circulo") { echo "checked"; }  ?> required>
        <label for="Circulo"></label>
        <br><br>
        <img src="./img/circulo.png" alt="circulito" style="height: 80px; width:auto">
        </div>

        <br><br>
        <div class="form-check">

        <input class="form-check-input" type="radio" name="figura" id="Triangulo" value="Triangulo" <?php if(isset($_SESSION['figura']) && $_SESSION['figura'] == "Triangulo") { echo "checked"; }  ?> required>
        <label for="Triangulo"></label>
        <br><br>
        <img src="./img/triangulo.png" alt="triangulito" style="height: 80px; width:auto">
</div>
        <br><br>
        <div class="form-check">

        <input class="form-check-input" type="radio" name="figura" id="Cuadrado" value="Cuadrado" <?php if(isset($_SESSION['figura']) && $_SESSION['figura'] == "Cuadrado") { echo "checked"; }  ?> required>
        <label for="Cuadrado"></label>
        <br><br>
        <img src="./img/cuadrado.png" alt="cuadradito" style="height: 80px; width:auto">
</div>
        <br><br>
        <div class="form-check">

        <input class="form-check-input" type="radio" name="figura" id="Rectangulo" value="Rectangulo" <?php if(isset($_SESSION['figura']) && $_SESSION['figura'] == "Rectangulo") { echo "checked"; }  ?> required>
        <label for="Rectangulo"></label>
        <br><br>
        <img src="./img/rectangulo.png" alt="rectangulito" style="height: 80px; width:auto">
</div>
        <br><br>
        <input type="submit" value="Enviar" class="btn btn-primary">
    </form>

<?php
if(isset($_SESSION['figura'])) {
    session_unset();
    session_destroy();
}
?>

</body>
</html>