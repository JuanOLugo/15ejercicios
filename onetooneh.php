<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="POST">
        <input type="submit" value="IMPRIMIR!">
    </form>

    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        echo "es post";
        for ($i = 0; $i < 101; $i++) {
            echo "<h5>$i</h5>";
            
        }
        exit();
    }
    ?>
</body>

</html>