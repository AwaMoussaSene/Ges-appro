<?php 
    class Unite{
        
    public int $idu;
    public string $lebelle;

    private const SQL_SELECT_ALL="select * from unite";

    public function findallUnite(){
        $mysqlClient = new PDO(
            'mysql:host=localhost;dbname=ges-appro;charset=utf8',
            'root',
            ''
        );
        $result=$mysqlClient->query(self::SQL_SELECT_ALL);
        $unite=$result->fetchAll(PDO::FETCH_CLASS, 'unite');
       
        return  $unite;
    }
    }
?>