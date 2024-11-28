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
        $nums = [1,2,3,4,5];
        $num = 0;
        for ($i = 0; $i < count($nums); $i++) {
            $num = $num + $nums[ $i ];
        }
        echo $num
        ?>
    </div>
</body>

</html>