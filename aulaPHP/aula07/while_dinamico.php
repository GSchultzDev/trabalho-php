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
    <h3>While dinamico</h3>
    <form method="get" action="whileDinamicoMostra.php">
        <?php
            $c = 1;
            while ($c <= 5) {
                echo"<p>$c valor: <input type='number' name='v$c'/> </p>";
                $c++;
            }
        ?>
        <input type="submit" value="enviar">
    </form>
</body>
</html>