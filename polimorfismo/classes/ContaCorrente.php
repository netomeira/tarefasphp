<?php

    class ContaCorrente extends Conta{
        
        private $taxa = 0.1;

        public function saca($valor){
            $this->saldo = $this->saldo - $valor - $this->taxa;
        }

    }
?>