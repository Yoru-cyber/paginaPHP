<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/main.css">
    <title>Document</title>
</head>
<header>
    <center>
        <div>
            <h1>Calculadora de Tiempo de Descarga</h1>

        </div>
    </center>
</header>

<body>
    <section id="calculator">
        <center>

            <div id="box">
                <table>
                    <form method="post">
                    <?php
                    include 'Data/formHandler.php';
                    echo '<form method="post">

                    Inserte su velocidad de internet: <input type="number" name="user_Download_Speed"><br><br>
                    Inserte su unidad de información: <input list="speedList" placeholder="Ejemplo: KB/s" name="user_Download_Type">

                    <datalist id="speedList">
                    <option value="KB/s">
                    <option value="MB/S">
                    <option value="GB/s">
                    </datalist> 
                    <input type="submit">

                     </form>';
                    
                    hacer_check();
                    

                
                    ?>
                    </form>
                </table>
            </div>

        </center>

    </section>
</body>

</html>