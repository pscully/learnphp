<?php 

class QueryBuilder {

    protected $pdo;

    public function __construct(PDO $pdo)

    {
        $this->pdo = $pdo;
        
    }

    public function getContent($id) {
        $statement = $this->pdo->prepare("select * from pages where id = {$id}");
        $statement->execute();

        return $statement->fetch(PDO::FETCH_OBJ);
    }

    public function selectAll($table, $intoClass) {

        $statement = $this->pdo->prepare("select * from {$table}");
    
        $statement->execute();
    
        return $statement->fetchAll(PDO::FETCH_CLASS, $intoClass);
    }
}