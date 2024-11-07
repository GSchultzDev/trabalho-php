<?php

class cartaoTravel{
    private $numero;
    private $tipo;
    private $usuario;
    private $saldo;
    private $situacao;

    public function __construct(){
        $this->setSaldo(0);
        $this->setSituacao(false);
        echo "<p>Conta do cartao travel criada com sucesso!</p>";
    }




    public function getNumero(){
        return $this->numero;
    }

    public function setNumero($numero){
        $this->numero = $numero;
    }

    public function getTipo(){
        return $this->tipo;
    }

    public function setTipo($tipo){
        $this->tipo = $tipo;
    }

    public function getUsuario(){
        return $this->usuario;
    }

    public function setUsuario($usuario){
        $this->usuario = $usuario;
    }

    public function getSaldo(){
        return $this->saldo;
    }

    public function setSaldo($saldo){
        $this->saldo = $saldo;
    }

    public function getSituacao(){
        return $this->situacao;
    }

    public function setSituacao($situacao){
        $this->situacao = $situacao;
    }






    public function cadastrarCartao($t){
        $this->setTipo($t);
        switch ($t) {
            case 'Compacto':
                $this->setSituacao(true);
                $this->setSaldo(10);
                break;
            
            case 'Master':
                $this->setSituacao(true);
                $this->setSaldo(50);
                break;
                
            case 'Black':
                $this->setSituacao(true);
                $this->setSaldo(100);
                break;
            
            default:
                echo "<p>Cartao travel invalido</p>";
                break;
        }
    }

    public function encerrarCartao(){
        if($this->getSaldo() > 0){
            echo "<p>O cartao travel ainda tem dinheiro. nao pode encerrar</p>";
        }else{
            $this->setSituacao(false);
            echo "<p>O cartao travel de ". $this->getUsuario() . " foi encerrado com sucesso!</p>";
            
        }
    }

    public function carregarCartao($valor){
        if($this->getSituacao()){
            $this->setSaldo($this->getSaldo() + $valor);
            echo "<p>Deposito de R$: $valor realizado no cartao travel de " . $this->getUsuario() . "</p>";
        }else {
            echo "<p>Cartao travel encerrado. Nao pode carregar.</p>";
        }
    }

    public function usarCartao($valor){
        if($this->getSituacao()){
            if($this->getSaldo() >= $valor){
                $this->setSaldo($this->getSaldo() - $valor);
                echo "<p>Pagamento de R$ $valor autorizado no cartao travel de " . $this->getUsuario() . "</p>";
            } else {
                echo "<p>Saldo insuficiente para pagamento</p>";
            }
        }else {
            echo "<p>Nao pode pagar com cartao travel encerrado</p>";
        }
    }

    public function tarifaCartao(){
        
        if($this->getSituacao()){

            switch ($this->getTipo()) {
                case 'Compacto':
                    $valor = 5;
                    break;
                
                case 'Master':
                    $valor = 25;
                    break;
                    
                case 'Black':
                    $valor = 50;
                    break;
                
                default:
                    echo "<p>Cartao travel invalido</p>";
                    break;
            }

            if($this->getSaldo() >= $valor){
                $this->setSaldo($this->getSaldo() - $valor);
                echo "<p>Tarifa de R$ $valor debita do cartao travel de " . $this->getUsuario() . "</p>";
            }else{
                echo "<p>Saldo insuficiente. Carregue o cartao travel.</p>";
            }
        }else{
            echo "<p>O cartao esta encerrado</p>";
        }
    }
}