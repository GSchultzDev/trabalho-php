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
        $i = $_GET["init"];
        $f = $_GET["fim"];
        $inc = $_GET["inc"];
        $a = $i;

        echo $i . " - " . $f . " - " . $inc;

        if(!is_null($i) || !is_null($f) || !is_null($inc)) {
            echo "<p>Falta digitar algum valor</p>";
        }else {
            if($i < $f){
                while($a <= $f) {
                        echo "<p>$a</p>";
                    
                    $a+= $inc;
                }
            }else {
                while($a >= $f) {
                    echo "<p>$a</p>";
                
                    $a-= $inc;
                }   
            }
        }
    ?>
    <br>
    <a href="contador.php">Voltar</a>
</body>
</html>