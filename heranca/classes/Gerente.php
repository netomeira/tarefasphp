<?php
    class Gerente extends Funcionario{
        //Attributes
        private $projeto;

        //Constructor
        public function __construct($nome='', $salario=0, $projeto=''){
            parent::__construct($nome, $salario);
            $this->projeto = $projeto;
        }

        //Methods
        public function relatorioFunc() {
            echo parent::relatorioFunc() . " / Projeto: " . $this->projeto;
        }

        public function getProjeto(){
            return $this->projeto;
        }

        public function setProjeto($projeto){
            $this->projeto = $projeto;
        }

    }
?>