<?php 
class Fournisseur{
    public int $idf;
    public string $nomf;
    public string $telf;

    private const SQL_SELECT_ALL="select * from fournisseur";

    public function findallFour(){
        $mysqlClient = new PDO(
            'mysql:host=localhost;dbname=ges-appro;charset=utf8',
            'root',
            ''
        );
        $result=$mysqlClient->query(self::SQL_SELECT_ALL);
        $fournisseurs=$result->fetchAll(PDO::FETCH_CLASS, 'Fournisseur');
       
        return  $fournisseurs;
    }
    
}