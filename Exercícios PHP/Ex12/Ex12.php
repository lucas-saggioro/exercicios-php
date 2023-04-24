<?php   
    $val = $_GET['valor'];   
    $qtd = $_GET['quantidade'];   

    $total = $val * $qtd;       
    
    echo "Total do salario: R$" .$total;
    
    

?>