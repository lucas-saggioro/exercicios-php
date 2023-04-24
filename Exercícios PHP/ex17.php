<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício</title>
</head>
<body>
    <h1> Exercício 17 <h1>
    <?php
        $itens = array(
            0 => 'Teclado',
            1 => 'Mouse',
            2 => 'Monitor',
            3 => 'Gabinete',
            4 => 'Fonte'
            );
       
        echo "<ul>";
            for($i = 0; $i < count($itens); $i++) {
                echo "<li>" . $itens[$i] . "</li>";
            }
        echo "</ul>";
    ?>


</body>
</html>