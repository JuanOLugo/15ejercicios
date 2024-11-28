<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


</head>

<body>
    <div>

        <form action="" method="POST" id="test">
            <input type="number" name="one" placeholder="Calificacion">
            <input type="number" name="two" placeholder="Calificacion">
            <select name="options" id="">
                <option value="suma">+</option>
                <option value="resta">-</option>
                <option value="mul">*</option>
                <option value="div">/</option>
            </select>
            <input type="submit" value="Verificar">
        </form>



        <?php

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST["one"]) && isset($_POST["two"]) && isset($_POST["options"])) {
                $numone = $_POST["one"];
                $numtwo = $_POST["two"];
                $options = $_POST["options"];
                if (!is_nan($numone) || !is_nan($numtwo)) {
                    switch ($options) {
                        case "suma":
                            echo $numone + $numtwo;
                            break;
                        case "resta":
                            echo $numtwo - $numtwo;
                            break;
                        case "mul":
                            echo $numone * $numtwo;
                            break;
                        case "div":
                            echo $numone / $numtwo;
                            break;
                        default:
                            echo "Seleccione una opcion";
                    }
                }else echo "No es un numero";
            }
        }
        ?>



    </div>
</body>

</html>