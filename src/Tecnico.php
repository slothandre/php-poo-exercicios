<?php
    namespace Biblioteca;
    require_once "Livro.php";
    class Tecnico extends Livro {
        private array $formato = ["digital", "fisico"];

        public function getFormato(): string
        {
            return implode(", ", $this->formato);
        }
        public function setFormato(array $formato): self
        {
            $this->formato = $formato;

            return $this;
        }
    }