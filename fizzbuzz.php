<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    for ($i = 0; $i <  101; $i++) {
        if($i % 3 == 0 && $i %5== 0) {
            echo " <p>Fizzbuzz $i </p>";
        }elseif($i % 3== 0 ) {
            echo " <p>Fizz $i </p>";
        }elseif($i %5== 0) {
            echo "<p> Buzz $i </p>";
        }else {
            echo "<p>$i</p>";
        }

    }


    
    ?>
</body>

</html>