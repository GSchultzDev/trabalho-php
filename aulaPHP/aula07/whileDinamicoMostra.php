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
    <h3>Mostrando os valores</h3>
    <?php
        $i = 1;
        
        while($i <= 5) {
            $valor = $_GET['v'.$i];
            if($valor == null) {
                echo "<p>Falta digitar o $i -$i- valor</p>";
            }else {
                echo "<p>$i valor: $valor</p>";
            }
            $i++;
        }
    ?>
    <br>
    <a href="while_dinamico.php">Voltar</a>
</body>
</html>