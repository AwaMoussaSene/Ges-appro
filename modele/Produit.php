<?php 
    class Produit extends Modele{
        public int $idp;
        public string $lebelle;

        public int $idt;

        public string $qtestock;

        public int $idc;

        public function __construct(){
            $this->table="produit";
            $this->class="Produit";
          }
    }
?>