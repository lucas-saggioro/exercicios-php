<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício</title>
</head>
<body>
   
    <h1> Exercício 21 </h1>


    <form method="GET" action="ex21.php">
        <input type="text" name="variavel" />
        <input type="submit" value="Enviar" />
    </form>


    <?php


$array = array(
    0 => array(
        'ID'  => '1',
        'Nome' => 'Teclado Dell',
        'Valor'=> 150.89
    ),
    1 => array(
        'ID'  => '2',
        'Nome' =>  'Mouse Dell',
        'Valor' =>  58.9
    ),
    2 => array(
        'ID'  => '3',
        'Nome' => 'Monitor LG',
        'Valor' => 900
    ),
    3 => array(
        'ID'  => '4',
        'Nome' => 'Ar Condicionado',
        'Valor'=> '1999.99'
    )
);
?>


<table border="1">
        <tr>
            <td> ID </td>
            <td> Nome</td>
            <td> Valor</td>
            <td> Valor Final</td>
        </tr>
        <?php


            if(isset($_GET['variavel'])){
                $percentual = ($_GET['variavel'] / 100) + 1;


            for($i = 0; $i < count($array); $i++)


            






























{
                echo "<tr>";
                echo "<td>" . $array[$i]['ID'] . "</td>";
                echo "<td>" . $array[$i]['Nome']. "</td>";
                echo "<td>" . $array[$i]['Valor']. "</td>";
                $calculo = $array[$i]['Valor'] * $percentual;
                echo "<td>". $calculo . "</td>";
                echo "</tr>";
            }
        


            echo 'o valor aplicado foi de ' . $_GET['variavel'] . '%';
}
        ?>
    </table>
       
</body>
</html>