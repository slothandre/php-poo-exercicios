<?php 
    namespace Biblioteca;
    class Programacao extends Tecnico {
        private string $area;

        public function getArea(): string
        {
            return $this->area;
        }
        public function setArea(string $area): self
        {
            $this->area = $area;

            return $this;
        }
    }