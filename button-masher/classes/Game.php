<?php
    class Game {
        //Attributes
        private $nome;
        private $header;

        //Constructor
        public function __construct($nome='', $header=''){
            $this->nome = $nome;
            $this->header = $header;
        }

        //Methods

        public function getNome(){
            return $this->nome;
        }

        public function setNome($nome){
            $this->nome = $nome;
        }

        public function getHeader(){
            return $this->header;
        }

        public function setHeader($header){
            $this->header = $header;
        }
    }
?>