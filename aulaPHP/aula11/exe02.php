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
    <form action="exe02_mostra.php" method='get'>
        <?php

            $controle = 0;
            $controle2 = 0;

            while($controle < 2){
                echo "Vetor [$controle, $controle2] <select name='vetor$controle$controle2'>";
                for($i2 = 0; $i2 <= 10; $i2++){
                    echo "<option value='$i2'>$i2</option>";
                }
                echo "</select><br><br>";
                $controle2++;
                if($controle2 > 3){
                    $controle++;
                    $controle2 = 0;
                }
            }

        ?>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>