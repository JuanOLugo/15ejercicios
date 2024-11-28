<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="POST">
        <input type="email" name="email" required placeholder="Email" >
        <textarea name="mensaje" id="" required name="text"></textarea>
        <input type="submit" value="Enviar!">
    </form>

    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if (isset($_POST["email"]) && isset($_POST["mensaje"])) {
            if(!empty($_POST["email"]) && !empty($_POST["mensaje"])){
                $email = $_POST["email"];
                $mensaje = $_POST["mensaje"];
                echo "email: ".$email." ";
                echo "Mensaje: ".$mensaje." ";
            }else echo "No tiene contenido";
        }
    }
    ?>
</body>

</html>