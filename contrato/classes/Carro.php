<?php
    class Carro extends Veiculo implements ICaracteristicas {

        public function exibeNome(){
            echo $this->nome . "<br>";
        }

        public function exibeMarca(){
            echo $this->marca . "<br>";
        }
        
        public function exibeModelo(){
            echo $this->modelo . "<br>";
        }

    }
?>