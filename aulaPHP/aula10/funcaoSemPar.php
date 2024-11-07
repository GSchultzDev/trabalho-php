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
        function bemVindo() {
            echo "<p align='center'>ola, seja bem vindo! </p>";
        }

        echo "<h3>Invocando a funcao bemVindo() </h3>";
        bemVindo();


        echo "<h3>Funcao benVindo() dentro do laco for </h3>";
        for($i = 1; $i <= 5; $i++){
            bemVindo();
        }
    ?>
</body>
</html>