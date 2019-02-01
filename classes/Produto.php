<?php
    class Produto {
        //Attributes
        private $nome;
        private $quantEstoque;

        //Constructor
        public function __construct($nome='', $quantEstoque=0){
            $this->nome = $nome;
            $this->quantEstoque = $quantEstoque;
        }

        //Methods
        public function imprimeDados() {
            echo $this->nome . "<br>" . $this->quantEstoque;
        }

        public function getNome(){
            return $this->nome;
        }

        public function setNome($nome){
            $this->nome = $nome;
        }

        public function getQuantEstoque(){
            return $this->quantEstoque;
        }

        //Faz com que quantEstoque não seja obrigatório e tenha um valor default
        public function setQuantEstoque($quantEstoque = 0){
            $this->quantEstoque = $quantEstoque;
        }

    }
?>