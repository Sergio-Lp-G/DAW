<!-- Calcualdora con dos inputs y un sleccionador de operador.
Si se recibren datos se muestra el resultado.
Si no son válidos o no existen mostrar la calculadora otra vez. -->
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Formularios. Ej4</title>
</head>

<body>
    <h2>Calculadora</h2>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>">

        <?php $valor = $_POST['usuario']; ?>

        <label>Valor1 </label><input type="text" value="" name="valor1"><br>
        <label>Valor2 </label><input type="text" value="" name="valor2"><br>
        <label for="cuenta">Selecciona un operador.</label>
        <select name="cuenta" id="cuenta">
            <option value="suma">suma</option>
            <option value="resta">resta</option>
            <option value="por">multiplicacion</option>
            <option value="div">division</option>
        </select>
        <input type="submit" value="enviar">
    </form>

    <?php
    echo "<br>";

    if (isset($_POST) && $_POST['valor1']) {
        switch ($_POST['cuenta']) {
            case "suma":
                $operacion = $_POST['valor1'] + $_POST['valor2'];
                echo "La suma de los operandos es " . $operacion;
                break;

            case "resta":
                $operacion = $_POST['valor1'] - $_POST['valor2'];
                echo "La resta de los operandos es " . $operacion;
                break;

            case "por":
                $operacion = $_POST['valor1'] * $_POST['valor2'];
                echo "La multiplicación de los operandos es " . $operacion;
                break;

            case "div":
                if ($_POST['valor1'] > 0) {
                    $operacion = $_POST['valor1'] / $_POST['valor2'];
                    echo "La división de los operandos es " . $operacion;
                    break;
                } else {
                    echo "Dividir para cero no es posible.";
                }

            default:
                # code...
                break;
        }
    }

    ?>



</body>

</html>