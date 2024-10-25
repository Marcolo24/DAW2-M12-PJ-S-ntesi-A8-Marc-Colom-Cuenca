function errorFigura() {
    const circulo = document.getElementById('Circulo');
    const triangulo = document.getElementById('Triangulo');
    const cuadrado = document.getElementById('Cuadrado');
    const rectangulo = document.getElementById('Rectangulo');

    if (!circulo.checked && !triangulo.checked && !cuadrado.checked && !rectangulo.checked) {
        Swal.fire({
            title: 'Error',
            text: 'Por favor, selecciona una figura.',
            icon: 'error',
            confirmButtonText: 'Aceptar'
        });
        return false; // Evita el envío del formulario
    }
    return true; // Permite el envío del formulario si hay una figura seleccionada
}

function lados() {
    if (document.getElementById('lado1')) {
        if (document.getElementById('lado1').value == "") {
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'Ingrese el valor del lado 1.',
            });
            return false;
        }
    }

    if (document.getElementById('lado2')) {
        if (document.getElementById('lado2').value == "") {
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'Ingrese el valor del lado 2.',
            });
            return false;
        }
    }
    if (document.getElementById('lado3')) {
        if (document.getElementById('lado3').value == "") {
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'Ingrese el valor del lado 3.',
            });
            return false;
        }
    }

}

function comprobarLado1() {

    const lado1 = document.getElementById('lado1');
    const error1 = document.getElementById('error1');
    error1.style.display = 'none';

    if (lado1.value.trim() === "") {
        error1.innerText = 'Ingrese el valor del lado 1.';
        error1.style.display = 'block';
        document.getElementById('lado1').style.borderColor = 'red';
        document.getElementById('lado1').style.borderWidth = '3px';
        return false;
    } else if (isNaN(lado1.value)) {
        error1.innerText = 'El valor del lado 1 debe ser un número.';
        error1.style.display = 'block';
        document.getElementById('lado1').style.borderColor = 'red';
        document.getElementById('lado1').style.borderWidth = '3px';
        return false;
    } else {
        document.getElementById('lado1').style.borderColor = '';
        document.getElementById('lado1').style.borderWidth = '';

    }
    return true;
}

function comprobarLado2() {
    const lado2 = document.getElementById('lado2');
    const error2 = document.getElementById('error2');
    error2.style.display = 'none';

    if (lado2.value.trim() === "") {
        error2.innerText = 'Ingrese el valor del lado 2.';
        error2.style.display = 'block';
        document.getElementById('lado2').style.borderColor = 'red';
        document.getElementById('lado2').style.borderWidth = '3px';
        return false;
    } else if (isNaN(lado2.value)) {
        error2.innerText = 'El valor del lado 2 debe ser un número.';
        error2.style.display = 'block';
        document.getElementById('lado2').style.borderColor = 'red';
        document.getElementById('lado2').style.borderWidth = '3px';
        return false;
    } else {
        document.getElementById('lado2').style.borderColor = '';
        document.getElementById('lado2').style.borderWidth = '';

    }
    return true;
}

function comprobarLado3() {

    const lado3 = document.getElementById('lado3');
    const error3 = document.getElementById('error3');
    error3.style.display = 'none';

    if (lado3.value.trim() === "") {
        error3.innerText = 'Ingrese el valor del lado 3.';
        error3.style.display = 'block';
        document.getElementById('lado3').style.borderColor = 'red';
        document.getElementById('lado3').style.borderWidth = '3px';
        return false;
    } else if (isNaN(lado3.value)) {
        error3.innerText = 'El valor del lado 3 debe ser un número.';
        error3.style.display = 'block';
        document.getElementById('lado3').style.borderColor = 'red';
        document.getElementById('lado3').style.borderWidth = '3px';
        return false;
    } else {
        document.getElementById('lado3').style.borderColor = '';
        document.getElementById('lado3').style.borderWidth = '';

    }
    return true;
}

function trianguloImposible() {

    if (document.getElementById('lado1') && document.getElementById('lado2') && document.getElementById('lado3')) {
        const lado1 = document.getElementById('lado1').value;
        const lado2 = document.getElementById('lado2').value;
        const lado3 = document.getElementById('lado3').value;
        if (lado1 + lado2 <= lado3 || lado1 + lado3 <= lado2 || lado2 + lado3 <= lado1) {
            Swal.fire({
                title: 'Error',
                text: 'Los lados ingresados no forman un triángulo.',
                icon: 'error',
                confirmButtonText: 'Aceptar'
            });
        };
        return false;
    }
    return true;
}