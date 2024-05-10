<?php 
    class Categorie extends Modele{
            
        public int $idc;
        public string $lebelle;

        public function __construct(){
            $this->table="categorie";
            $this->class="Categorie";
          }
    }
?>