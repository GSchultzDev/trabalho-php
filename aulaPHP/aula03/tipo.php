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
      echo "<h3>Tipo da variavel</h3>";
      $var1 = 10;
      $var2 = 35.86;
      $var3 = "texto";
      $var4 = false;
      $var5 = null;
      
      echo "var1 e do tipo " . $va1 . "<br>";
      echo "var2 e do tipo " . $va2 . "<br>";
      echo "var3 e do tipo " . $va3 . "<br>";
      echo "var4 e do tipo " . $va4 . "<br>";
      echo "var5 e do tipo " . $va5 . "<br>";
    ?>
</body>
</html>