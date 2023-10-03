<?php
    namespace Biblioteca;
    require_once "Programacao.php";
    class Web extends Programacao {
        public function __construct() {
            echo "<h2>Livros de Programação Web</h2>";
        }
    }