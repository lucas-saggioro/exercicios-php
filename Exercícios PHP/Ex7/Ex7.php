<?php   
    $val = $_GET['valor'];    

    
    $desconto = $val * 0.07;
    $total = $val - $desconto;

    echo "Valor original: ".$val;
    echo "<br>Desconto: ".$desconto;
    echo "<br>Total com desconto: ".$total;
    

?>