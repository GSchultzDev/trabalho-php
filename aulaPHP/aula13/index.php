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
    <button class="voltar"><a href=".."><i class="bi bi-box-arrow-in-left"></a></i></button>
        <pre>
            <?php
                require_once 'Veiculo.php';

                $carro = new Veiculo;
                $carro->nome = "Gol";
                $carro->cor = "branco";
                $carro->ano = 2015;
                $carro->botao = true;

                echo "<h3>Mostrando o objeeto carro com var_dump</h3>";
                var_dump($carro);

                echo "<h3>Mostrando o objeeto carro com print_r</h3>";
                print_r($carro);

                echo "<h3>Mostrando os metodos</h3>";
                $carro->acelerar();
                $carro->desligar();
                $carro->acelerar();
                $carro->ligar();
                $carro->acelerar();
            ?>
        </pre>
    </body>
</html>