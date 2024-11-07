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
            $clientes[0]['nome'] = 'Jose da silva';
            $clientes[0]['sexo'] = 'Masculino';
            $clientes[0]['cidade'] = 'Jales/SP';

            $clientes[1]['nome'] = 'Maria Souza';
            $clientes[1]['sexo'] = 'Feminino';
            $clientes[1]['cidade'] = 'Urania/SP';

            echo "<h3>Mostrando com print_r</h3>";
            print_r($clientes);
            echo "<h3>Percorrendo um array com foreach mostrando a chave</h3>";
            foreach ($clientes as $chaveA => $linha){
            echo "--> linhas: $chaveA<br>";
            foreach($linha as $chaveB => $coluna){
                echo "Coluna $chaveB: $coluna | ";
            }
            echo "<br>";
        }
        ?>
    </pre>
</body>
</html>