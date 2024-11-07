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
    <h3>Selecione um numero para fazer a tabuada</h3>
    <form action="tabuadaMostra.php" method="get">
        Numero: <input type="number" name="n1" id="number">
        <br>
        <?php
            $n1 = 1;

            echo "Numero <select name='n1' id='select' disabled>";
            do {
                echo "<option value='$n1'>$n1</option>";
                $n1++;
            } while ($n1 <= 10); 
            echo "</select>";
        ?>
        <input type="submit" value="Tabuada">
        <br>
    </form>
    <button onclick="trocaCampo()">Alternar seletor</button>
    
</body>
<script>
    let teste = false;
    function trocaCampo(){
        if(teste){
            document.getElementById("number").disabled = false;
            document.getElementById("select").disabled = true;
            teste = !teste;
        }else{
            document.getElementById("number").disabled = true;
            document.getElementById("select").disabled = false;
            teste = !teste;
        }
    }
</script>
</html>