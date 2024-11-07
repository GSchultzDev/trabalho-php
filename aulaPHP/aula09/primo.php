<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../../css/index.css">
</head>
<body>
    <button class="voltar"><a href="index.php"><i class="bi bi-box-arrow-in-left"></a></i></button>

<?php
$n1 = $_GET["n1"];
$multiplos = array();
echo "<h3>Analisando o numero $n1</h3>";



for($cont = 1; $cont <= $n1; $cont++){
    $resultado = $n1%$cont;

    if($resultado == 0 || $resultado == $n1){
        array_push($multiplos, $cont);
    };
};

$total = count($multiplos);

echo "Valores multiplos: ";
for($cont2 = 0; $cont2 <= $total; $cont2++){
    echo $multiplos[$cont2] . " ";
};
echo "<br>Total de multiplos: $total<br>";


if($total == 2){
    echo "Resultado: $n1 e PRIMO!";
}else {
    echo "Resultado: $n1 nao e PRIMO!";
};
 
echo "<br><a href='primo.html'>Voltar</a>";
?>    
</body>
</html>
