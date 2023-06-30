<?php
$userSpeed = $_POST["user_Download_Speed"]??null;
$userDownloadType = $_POST["user_Download_Type"]??null;
if ($userSpeed < 8 || $userDownloadType == "MB/s") {
    $userDownloadType = "Kbps";
}
$userDownloadSize = $_POST["user_Download_Size"]??null;
$userDownloadSizeFormat = $_POST["user_Download_Size_Format"]??null;
switch ($userDownloadSizeFormat) {
    case "GB":
        $userDownloadSize = $userDownloadSize * 1000;
        $userDownloadSizeFormat = "MB";
        break;
}
$numberBits = 8;
$trueSpeed = $userSpeed/$numberBits;

function hacer_check()
{
    global $userDownloadType, $trueSpeed, $downloadTime, $userDownloadSize;
    $downloadTime = $userDownloadSize/$trueSpeed;
    
   
    if (empty($_POST["user_Download_Speed"])&&empty($_POST["user_Download_Type"])) {

        echo '<p>No has insertado tu velocidad ¯\_( ͡° ͜ʖ ͡°)_/¯ </p>';
        echo '<p>No has insertado tu formato de información ¯\_( ͡° ͜ʖ ͡°)_/¯ </p>';
    }
    else{
        echo '<p>Su velocidad real es: ' . $trueSpeed .' '. $userDownloadType. '</p>';
        echo '<p>Su tiempo estimado de descarga es: ' . $downloadTime . ' segundos</p>';
        echo '<p>Su tiempo estimado de descarga es: ' . number_format(($downloadTime / 60), 4). ' minutos</p>';
        echo '<p>Su tiempo estimado de descarga es: ' . number_format(($downloadTime/60)/60, 4) . ' horas</p>';
    }


  
}