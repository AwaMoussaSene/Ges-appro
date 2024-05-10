<?php 
    class Unite extends Modele{
        
    public int $idu;
    public string $lebelle;

    public function __construct(){
        $this->table="unite";
        $this->class="Unite";
      }
    }
?>