<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="POST">
        <input type="number" name="num" id="" placeholder="numero uno">

        <input type="submit" value="Verificar">
    </form>

    <?php
    $dias = ["0", "lunes", "martes", "miercoles", "jueves", "viernes", "sabado", "domingo"];
    $num = $_POST["num"];
    if ($num > 7 or $num <= 0) {
        echo "No existe dia";
    } elseif ($dias[$num]) {
        echo "El dia es: " . $dias[$num] . "";
    }
    ?>
</body>

</html>