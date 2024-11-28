<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Mayor o igual a</h1>
    <form action="" method="POST">
        <input type="number" name="one" id="" placeholder="numero uno">
        <input type="number" name="two" id="" placeholder="numero dos">
        <input type="submit" value="Verificar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $number_one = $_POST["one"];
        $number_two = $_POST["two"];
        if (isset($number_one) && isset($number_two)) {
            if($number_one > $number_two) echo "Numero mayor: $number_one";
            elseif($number_one < $number_two) echo "Numero mayor :$number_two";
            else echo "Son iguales";
        }
    }
    ?>
</body>

</html>