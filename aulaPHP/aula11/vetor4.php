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
            $cliente['razaosocial'] = 'Jose da Silva - ME';
            $cliente['nomefantasia'] = 'JS Solucoes e Sistemas';
            $cliente['cidade'] = 'Jales';
            echo "<h3>Mostrando com print_r</h3>";
            print_r($cliente);
            echo "<h3>Mostrando com var_dump</h3>";
            var_dump($cliente);
            echo "<h3>Percorrendo um array com foreach</h3>";
            foreach ($cliente as $valor){
                echo "$valor <br>";
            }
            echo "<h3>Percorrendo um array com foreach mostrando a chave</h3>";
            foreach ($cliente as $chave => $valor){
                echo "$chave: $valor <br>";
            }
        ?>
    </pre>
</body>
</html>