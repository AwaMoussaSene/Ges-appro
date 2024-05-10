<?php 
    class Modele{
        protected string $table;
        protected string $class;

        public function findAll(){
         $SQL_SELECT_ALL="SELECT * FROM $this->table";

            $mysqlClient = new PDO(
                'mysql:host=localhost;dbname=ges-appro;charset=utf8',
                'root',
                ''
            );
            $result=$mysqlClient->query($SQL_SELECT_ALL);
            $all=$result->fetchAll(PDO::FETCH_CLASS, $this->class);
        
            return  $all;
        }
        
    }
?>
<!-- "SELECT * FROM `produit`p, `categorie`c WHERE p.idc=c.idc;" -->