<?php   

$n1 = $_GET['n1'];
$n2 = $_GET['n2'];

$suma = $n1 + $n2;
$resta = $n1 - $n2;
$producto = $n1 * $n2;
$exponencia = $n1 ** $n2;

if ($n2 == 0){
    $division = "No se puede dividir entre 0";
}else{
    $division = $n1 / $n2;
}

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
          echo "<p>El producto de $n1 * $n2 = $producto</p>";
          echo "<p>El cociente de $n1 / $n2 = $division</p>";
          echo "<p>La exponenciación de  $n1 elevado a $n2 = $exponencia</p>";
    ?>
</body>
</html>
