<?php 
    class Produit{
        public int $idp;
        public string $lebelle;

        public int $idt;

        public string $qtestock;

        public int $idc;

        private const SQL_SELECT_ALL="SELECT * FROM `produit`p, `categorie`c WHERE p.idc=c.idc;";

        public function findAllProduit(){
            $mysqlClient = new PDO(
                'mysql:host=localhost;dbname=ges-appro;charset=utf8',
                'root',
                ''
            );
            $result=$mysqlClient->query(self::SQL_SELECT_ALL);
            $produit=$result->fetchAll(PDO::FETCH_CLASS, 'produit');
        
            return  $produit;
        }
    }
?>