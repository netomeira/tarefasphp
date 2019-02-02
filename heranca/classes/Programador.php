<?php
    class Programador extends Funcionario{
        //Attributes
        private $linguagem;

        //Constructor
        public function __construct($nome='', $salario=0, $linguagem=''){
            parent::__construct($nome, $salario);
            $this->linguagem = $linguagem;
        }

        //Methods
        public function relatorioFunc() {
            echo parent::relatorioFunc() . " / Linguagem: " . $this->linguagem;
        }

        public function getLinguagem(){
            return $this->linguagem;
        }

        public function setLinguagem($linguagem){
            $this->linguagem = $linguagem;
        }

    }
?>