<?php
    class ConexaoBD {
        private static $conn;

        function __construct(){
            self::$conn = new PDO('mysql:host=localhost;dbname=button-masher', 'root', '');
        }

        function __destruct() {
            self::$conn = null;
        }

        public function executar($instrucao){
            self::$conn->exec($instrucao);
        }

        public function query($instrucao){
            return self::$conn->query($instrucao);
        }
    }
?>