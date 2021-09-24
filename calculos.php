<?php   

$num1 = $_GET['n1'];
$num2 = $_GET['n2'];

$suma = $n1 + $n2;
$resta = $n1 - $n2;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Resultados:</h1>
    <?php echo "<p>La suma de $n1 + $n2 = $suma</p>";
            echo "<p>La resta de $n1 - $n2 = $resta</p>";
    ?>
</body>
</html>
