<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <textarea name="frase" id=""></textarea>
        <input type="submit" value="Enviar">
    </form>
    <?php
    
    if (isset($_POST["frase"])) {
        $frase = $_POST["frase"];
        $str = str_replace(" ","", $frase);
        echo "La frase " . $frase . " Tiene " . strlen($str) . " letras";
    }
    ?>
</body>

</html>  