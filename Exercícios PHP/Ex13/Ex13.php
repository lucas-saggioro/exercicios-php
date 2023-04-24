<?php   
    $int1 = $_GET['int1'];   
    $int2 = $_GET['int2'];  
    $real = $_GET['real'];

    $a = ($int1 * 2) * ($int2 / 2);
    $b = ($int1 * 3) + $real;
    $c = pow($real, 3);

    echo "a. o produto do dobro do primeiro com metade do segundo= ".$a;
    echo "<br>b. a soma do triplo do primeiro com o terceiro= ".$b;
    echo "<br>c. o terceiro elevado ao cubo = ".$c;
    
    

?>