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
            <input type="text" name="one" id="one" placeholder="Calificacion">
            <input type="submit" value="Verificar">
        </form>


        
        <?php

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST["one"])) {
                $calification = $_POST["one"];
                $maxnote = 5;
                $minimun_note = 0;
                $minimunpass = 3;
                if (!is_nan($calification)) {
                    if($calification >= $minimunpass && $calification < $maxnote+1) {
                        echo "Aprobo con $calification";
                    }elseif($calification < $minimunpass && $calification > $minimun_note - 1) echo "no Aprobo con $calification";
                    else echo "Nota no valida";
                } else echo "No llego nada";
            }
        }
        ?>
        
        
        
    </div>
</body>

</html>