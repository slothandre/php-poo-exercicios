<?php
    namespace Biblioteca;
    require_once "Programacao.php";
    class Web extends Programacao {
        public function __construct() {
            echo "Livros de Programação Web";
        }
    }