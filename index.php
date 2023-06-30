<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <title>Calculadora de Tiempo de Descarga</title>
</head>
<header>
    <center>

        <div style="width: 100%; height: auto; padding:0px;">
            <img src="styles\img\punpunTriangle.png" style="width: 120px; height:80px; float: left; margin: 0px">
            <h1 style="font-family: 'Monserrat', sans-serif; font-weight:100;">Calculadora de Tiempo de Descarga</h1>


        </div>
    </center>
</header>

<body>
    <section id="calculator" style="margin: 50px;">
        <center>

            <div id="box" >
                

                    <?php
                    include 'Data/formHandler.php';
                    echo '<form method="post">
                    <p>
                    Inserte su velocidad de internet: <input type="number" name="user_Download_Speed" required><br><br>
                    Inserte su unidad de información: <input list="speedList" placeholder="Ejemplo: KB/s" name="user_Download_Type" required>
                    <br><br>
                    Inserte el tamaño de su descarga: <input type="number" name="user_Download_Size" required><input list="downloadList" placeholder="Ejemplo: GB" name="user_Download_Size_Format" required>
                    <br>
                    </p>
                    <datalist id="speedList">
                    <option value="KB/s">
                    <option value="MB/s">
                    <option value="GB/s">
                    </datalist> 
                    <datalist id="downloadList">
                    <option value="KB">
                    <option value="MB">
                    <option value="GB">
                    </datalist>
                    <br>
                    <input type="submit" value="Chuu">

                     </form>';

                    hacer_check();



                    ?>

                
                <img id="punpun" src="styles\img\punpunwalking.gif">
            </div>

        </center>

    </section>
</body>

</html>