<?php
function convertTrueSpeed(){

$userSpeed = $_POST["user_Download_Speed"];

$numberBits = 8;
$trueSpeed = $userSpeed/$numberBits;

return $trueSpeed;

}
function getDownloadFormat(){
    $userDownloadType = $_POST["user_Download_Type"];

    return $userDownloadType;
    
}
function hacer_check()
{
    if (empty($_POST["user_Download_Speed"])&&empty($_POST["user_Download_Type"])) {

        echo '<p>No has insertado tu velocidad :( </p>';
        echo '<p>No has insertado tu formato de información :( </p>';
    }
    else{
        echo '<p>Su velocidad real es: ' . convertTrueSpeed() . getDownloadFormat(). '</p';
        
    }


  
}