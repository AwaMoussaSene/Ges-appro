<?php 
    class Categorie{
            
        public int $idc;
        public string $lebelle;

        private const SQL_SELECT_ALL="select * from categorie";

        public function findAllCategorie(){
            $mysqlClient = new PDO(
                'mysql:host=localhost;dbname=ges-appro;charset=utf8',
                'root',
                ''
            );
            $result=$mysqlClient->query(self::SQL_SELECT_ALL);
            $categorie=$result->fetchAll(PDO::FETCH_CLASS, 'categorie');
        
            return  $categorie;
        }
    }
?>