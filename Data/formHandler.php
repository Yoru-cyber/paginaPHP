<?php
$userSpeed = $_POST["user_Download_Speed"]??null;
$userDownloadType = $_POST["user_Download_Type"]??null;
$userDownloadSize = $_POST["user_Download_Size"]??null;
$userDownloadSizeFormat = $_POST["user_Download_Size_Format"]??null;
switch ($userDownloadSizeFormat) {
    case "GB":
        $userDownloadSize = $userDownloadSize * 1000;
        break;
}

$numberBits = 8;
$trueSpeed = $userSpeed/$numberBits;
function hacer_check()
{
    global $userDownloadType, $trueSpeed, $downloadTime, $userDownloadSize;
    
    
    
   
    if (empty($userDownloadSize)&&empty($trueSpeed)) {

        echo '<p>No has insertado tus datos ¯\_( ͡° ͜ʖ ͡°)_/¯ </p>';
       
    }
    else{
        $downloadTime = $userDownloadSize / $trueSpeed;
        echo '<p>Su velocidad real es: ' . $trueSpeed .' '. strtolower($userDownloadType). '</p>';
        echo '<p>Su tiempo estimado de descarga es: ' . $downloadTime . ' segundos</p>';
        echo '<p>Su tiempo estimado de descarga es: ' . number_format(($downloadTime / 60), 4). ' minutos</p>';
        echo '<p>Su tiempo estimado de descarga es: ' . number_format(($downloadTime/60)/60, 4) . ' horas</p>';
    }


  
}