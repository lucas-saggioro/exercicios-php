<?php   
    $numero = $_GET['num'];       

    if($numero > 0){
        echo "Valor positivo";
    }else if($numero < 0){
        echo "Valor negativo";
    }else {
        echo "Igual a zero";
    }

    
    
    
    

?>