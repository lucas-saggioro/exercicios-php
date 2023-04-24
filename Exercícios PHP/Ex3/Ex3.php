<?php   
    $altura = $_GET['altura'];  
    $sexo = $_GET['sexo'];  

    if($sexo == 'masculino'){
        $resultado = (72.7 * $altura) - 58;
        echo "Seu peso ideal: ".$resultado."kg";

    }else if($sexo == 'feminino'){
        $resultado = (62.1 * $altura) - 44.7;
        echo "Seu peso ideal: ".$resultado."kg";

    }else{
        echo "Sexo nao selecionado";
    }    

?>