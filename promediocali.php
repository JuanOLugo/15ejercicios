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
        <button id="sender">Enviar notas</button>
        <h1>Calificaciones: <label id="text-ca"></label> </h1>
        
        <?php

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST["califications"])) {
                $califications = json_decode($_POST["califications"]);
                if (count($califications) > 0) {
                    $numstable = 0;
                    for ($i = 0; $i < count($califications); $i++) {
                        $numstable = $numstable + $califications[$i];
                    }
                    $finishoperation = $numstable / count($califications);
                    echo " <h1> El promedio es: $finishoperation</h1>" ;
                } else echo "No llego nada";
            }
        }
        ?>
        <script>
            //Maxima calificacion = 5
            const form = document.getElementById("test")
            let califications = []
            form.addEventListener("submit", (e) => {
                e.preventDefault()
                let calification = parseFloat(document.getElementById("one").value);

                if (calification < 6 && !isNaN(calification) && calification > -1) {
                    if (califications.length < 5) califications.push(calification)
                    else console.log("es todo")
                    document.getElementById("one").value = ""
                    document.getElementById("text-ca").innerHTML = JSON.stringify(califications)
                } else alert("La calificacion maxima es 5 y minima es 0")


            })


            document.getElementById("sender").addEventListener("click", () => {
                if (califications.length > 0) {
                    const data = new FormData()
                    data.append("califications", JSON.stringify(califications))
                    fetch("", {
                        method: "POST",
                        body: data
                    }).then(res => res.text()).then(html => document.write(html)).catch(err => err)
                    califications = []
                }
            })
        </script>
        
    </div>
</body>

</html>