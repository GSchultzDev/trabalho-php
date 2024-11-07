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
            require_once 'cartaoTravel.php';

            echo "<h3>Criando o objeto user1</h3>";
            $user1 = new cartaoTravel();
            $user1->cadastrarCartao("Black");
            $user1->setNumero(1);
            $user1->setUsuario("Jose");
            $user1->carregarCartao(1000);
            $user1->tarifaCartao();
            $user1->usarCartao(550);
            $user1->encerrarCartao();
            $user1->usarCartao(500);
            print_r($user1);


            echo "<h3>Criando o objeto user2</h3>";
            $user2 = new cartaoTravel();
            $user2->cadastrarCartao("Compacto");
            $user2->setNumero(2);
            $user2->setUsuario("Maria");
            $user2->carregarCartao(500);
            $user2->tarifaCartao();
            $user2->usarCartao(600);
            $user2->usarCartao(505);
            $user2->encerrarCartao();
            print_r($user2);
        ?>
    </pre>
</body>
</html>