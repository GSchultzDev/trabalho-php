<?php

    class Veiculo {
        public $nome;
        public $cor;
        private $ano;
        protected $botao;

        
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
    }