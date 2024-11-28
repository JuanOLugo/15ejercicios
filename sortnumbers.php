<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    $numeros = [5, 8, 1, 4, 10, 2];
    $n = count($numeros);


    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {

            if ($numeros[$j] > $numeros[$j + 1]) {

                $temp = $numeros[$j];
                $numeros[$j] = $numeros[$j + 1];
                $numeros[$j + 1] = $temp;
            }
        }
    }


    echo "Arreglo ordenado en orden descendente: ";
    print_r($numeros);
    ?>
</body>

</html>