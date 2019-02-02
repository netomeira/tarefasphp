<?php
    class Funcionario {
        //Attributes
        private $nome;
        private $salario;

        //Constructor
        public function __construct($nome='', $salario=0){
            $this->nome = $nome;
            $this->salario = $salario;
        }

        //Methods
        public function relatorioFunc() {
            echo "Nome: " . $this->nome . " / Salario: " . $this->salario;
        }

        public function getNome(){
            return $this->nome;
        }

        public function setNome($nome){
            $this->nome = $nome;
        }

        public function getSalario(){
            return $this->salario;
        }

        //Faz com que salario não seja obrigatório e tenha um valor default
        public function setSalario($salario = 0){
            $this->salario = $salario;
        }

    }
?>