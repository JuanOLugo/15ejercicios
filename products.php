<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


</head>

<body>
    <div>
        <table border="1" cellpadding="5">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Stock</th>
                </tr>
            </thead>
            <tbody>
                <?php


                $products = [
                    [
                        "name" => "Chancleta",
                        "price" => 12000,
                        "stock" => 11,
                        "id" => 1
                    ],
                    [
                        "name" => "Sueter",
                        "price" => 22000,
                        "stock" => 12,
                        "id" => 2
                    ],
                    [
                        "name" => "Short",
                        "price" => 32000,
                        "stock" => 12,
                        "id" => 3
                    ],
                    [
                        "name" => "Jean",
                        "price" => 42000,
                        "stock" => 12,
                        "id" => 4
                    ]
                ];

                foreach ($products as $product) {
                    $productname = $product["name"];
                    $productprice = $product["price"];
                    $productqty = $product["stock"];
                    $productid = $product["id"];
                    echo "
                        <tr> 
                        <td>$productid</td> 
                        <td>$productname</td> 
                        <td>$productprice</td> 
                        <td>$productqty</td> 
                        </tr> 
                    ";
                }
                ?>
            </tbody>
        </table>



    </div>
</body>

</html>