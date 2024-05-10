<?php 
class Fournisseur extends Modele{
    public int $idf;
    public string $nomf;
    public string $telf;

  public function __construct(){
    $this->table="fournisseur";
    $this->class="Fournisseur";
  }

  public function save(){
    $SQL_INSERT="insert into fournisseur (nomf,telf) values ('$this->nomf',$this->telf)";
    $result= $this->openConnexion()->exec($SQL_INSERT);
  }
}