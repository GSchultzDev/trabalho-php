<?php

    class Veiculo {
        private $nome;
        private $cor;
        private $ano;
        protected $botao;

        public function __construct($n, $a, $b){
            $this->nome = $n;
            $this->cor = "amarelo";
            $this->ano = $a;
            $this->botao = $b;
            $this->desligar();
        }

        public function acelerar() {
            if($this->botao === true) {
                echo "<p>O carro esta acelerando ...</p>";
            } else {
                echo "<p>O carro esta parado ...</p>";
            }
        }

        public function ligar(){
            $this->botao = true;
        }

        public function desligar(){
            $this->botao = false;
        }

        public function getNome() {
            return $this->nome;
        }
    
        public function getCor() {
            return $this->cor;
        }
            
        public function getAno() {
            return $this->ano;
        }
            
        public function getBotao() {
            return $this->botao;
        }
        
        
        public function setNome($nome) {
            $this->nome = $nome;
        }
    
        public function setCor($cor) {
            $this->cor = $cor;
        }

        public function setAno($ano) {
            $this->ano = $ano;
        }

        public function setBotao($botao) {
            $this->botao = $botao;
        }

    }