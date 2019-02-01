<?php
    class Produto {
        //Attributes
        public $nome;
        public $quantEstoque;

        //Methods
        public function imprimeDados() {
            echo $this->nome . "<br>" . $this->quantEstoque;
        }
    }
?>