<?php

    function texto() {
        echo "<p>Esta funcao mostra o texto sem argumento</p>";
    }

    function mostraValor($valor) {
        echo "<p>Esta funcao mostra o valor informado com o argumento = $valor</p>";
    }

    function soma($x, $y) {
        echo "<p>A soma de $x e $y = " . ($x + $y) . "</p>";
    }

    function multi($x, $y) {
        echo "<p>A multiplicacao de $x e $y = " . ($x * $y) . "</p>";
    }

    function divi($x, $y) {
        echo "<p>A divicao de $x e $y = " . ($x / $y) . "</p>";
    }