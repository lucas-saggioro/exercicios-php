<?php   
    $val1 = $_GET['val1'];
    $val2 = $_GET['val2'];   
    $val3 = $_GET['val3'];


    $media = ($val1 + $val2 + $val3) / 3;
    
    echo "O media eh: ".$media;
    

?>