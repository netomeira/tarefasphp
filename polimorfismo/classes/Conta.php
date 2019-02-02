<?php

    class Conta {
        protected $saldo;

        public function __construct($saldo=0){
            $this->saldo = $saldo;
        }

        public function getSaldo(){
            return $this->saldo;
        }

        public function setSaldo($saldo){
            $this->saldo = $saldo;
        }

        public function deposita($valor){
            $this->saldo = $this->saldo + $valor;
        }

        public function saca($valor){
            $this->saldo = $this->saldo - $valor;
        }

        public function imprimeExtrato(){
            return "Saldo: " . $this->saldo;
        }
    }
?>