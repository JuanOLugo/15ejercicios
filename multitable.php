<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .s{
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            background-color: seagreen;
            color: white;
        }
    </style>

</head>

<body>
    <div class="s">
        

        <?php

for ($i = 1; $i < 11; $i++) {
    echo "
<table border='1' cellpadding='5'>
    <thead>
                <tr>
                    <th>Multiplicando</th>
                    <th>X</th>
                    <th>Multiplicador</th>
                    <th>Resultado</th>
                </tr>
            </thead>
            
    
    ";
    for ($j = 0; $j < 11; $j++) {
        $result = $i * $j;
        echo "
        
            
                
                <tbody>
                    <tr> 
                        <td>$i</td>
                        <td>X</td> 
                        <td>$j</td> 
                        <td>$result</td> 
                    </tr>
                </tbody>
            
        
        ";
    }

    echo "</table>";
}
?>

    </div>
</body>

</html>