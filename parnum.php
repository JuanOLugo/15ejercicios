<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <?php
        for ($i = 0; $i < 51; $i++) {
            if ($i % 2 == 0) {
                echo "<h1>$i</h1>";
            }
        }
        ?>
    </div>
</body>

</html>