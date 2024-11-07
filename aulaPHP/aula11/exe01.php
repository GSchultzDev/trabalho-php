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
    <button class="voltar"><a href="index.phps"><i class="bi bi-box-arrow-in-left"></a></i></button>
    <form action="exe01_mostra.php" method='get'>
        <?php

            for($i = 0; $i < 5; $i++){
                echo "Vetor [$i] <select name='vetor$i'>";
                for($i2 = 0; $i2 <= 10; $i2++){
                    echo "<option value='$i2'>$i2</option>";
                }
                echo "</select><br><br>";
            }
        ?>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>