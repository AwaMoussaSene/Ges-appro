<?php 
class Fournisseur extends Modele{
    public int $idf;
    public string $nomf;
    public string $telf;

  public function __construct(){
    $this->table="fournisseur";
    $this->class="Fournisseur";
  }
    
}