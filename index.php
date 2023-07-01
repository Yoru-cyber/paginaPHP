<?php include "includes/header.php" ?>
<section id="calculator" style="margin: 50px;">
    <center>

        <div id="box" style="width: fit-content;">


            <form method="post" action="index.php" style="padding-top:5px; margin: 8px;">
                <p>
                    Inserte su velocidad de internet: <input type="number" name="user_Download_Speed" required>
                    <input list="speedList" placeholder="Ejemplo: KB/s" name="user_Download_Type" required>
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
                <input type="submit" value="Calcular" style="width: min-content;">
                <?php
                include 'Data/formHandler.php';
                hacer_check();
                ?>
            </form>



            <img id="punpun" src="styles\img\punpunwalking.gif">
        </div>

    </center>

</section>
</body>

</html>