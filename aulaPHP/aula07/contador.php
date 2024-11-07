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
    <form method="get" action="contador_mostra.php">
        Inicio: <input type="number" name="init">
        <br>
        Fim: <input type="number" name="fim">
        <br>
        <?php
            $n1 = 1;

            echo "Inc/Dec <select name='inc' id='select'>";
            while ($n1 <= 10) {
                echo "<option value='$n1'>$n1</option>";
                $n1++;
            }; 
            echo "</select>";
        ?>
        <input type="submit" value="enviar">
        <br>
        Inc/Dec: <input type="number" name="inc" id="number" disabled>
    </form>
    <button onclick="trocaCampo()">Alternar seletor</button>
</body>
<script>
    let teste = false;
    function trocaCampo(){
        if(teste){
            document.getElementById("number").disabled = true;
            document.getElementById("select").disabled = false;
            teste = !teste;
        }else{
            document.getElementById("number").disabled = false;
            document.getElementById("select").disabled = true;
            teste = !teste;
        }
    }
</script>
</html>
