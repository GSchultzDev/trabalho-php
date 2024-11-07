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
    <pre>
        <?php
            $mix[] = "Jose";
            $mix[] = 7;
            $mix[] = 12.5;
            $mix[] = "Maria";
            echo "<h3>Mostrando com print_r</h3>";
            print_r($mix);
            echo "<h3>Mostrando com var_dump</h3>";
            var_dump($mix);
        ?>
    </pre>
</body>
</html>