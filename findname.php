<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="POST">
        <input type="text" name="name" required placeholder="Name" >
        <input type="submit" value="Enviar!">
    </form>

    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $names = ["Juan", "Maria", "Andres", "Fernanda"];
        if (isset($_POST["name"])) {
            if(!empty($_POST["name"])){
                $name = strtolower($_POST["name"]);
                for($i = 0; $i < count($names); $i++){
                    if(strtolower($names[$i]) == $name){
                        echo "El nombre existe en la lista";
                        exit();
                    }
                    
                }
                echo "El nombre no existe";
            }else echo "No tiene contenido";
        }
    }
    ?>
</body>

</html>