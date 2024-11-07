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
            $linha = 0;
            $coluna = 0;
            $vetor[0][0] = $_GET["vetor$linha$coluna"];

            echo "<br>";
            while($linha < 2){
                $vetor[$linha][$coluna] = $_GET["vetor$linha$coluna"];
                echo "matrix[$linha] [$coluna] = " . $vetor[$linha][$coluna] . "<br>";

                $coluna++;
                if($coluna > 3){
                    $linha++;
                    $coluna = 0;
                }
            }


                echo "<h3>Mostrando com o foreach</h3>";
            foreach ($vetor as $chaveA => $linha){
                echo "--> linha: $chaveA<br>";
                foreach($linha as $chaveB => $coluna){
                    echo "Coluna $chaveB: $coluna <br>";
                }
                echo "<br>";
            }

            echo "<h3>Mostrando com print_r</h3>";
                print_r($vetor);

            echo "<h3>Mostrando com var_dump</h3>";
                var_dump($vetor);

            
        ?>
    </pre>
</body>
</html>