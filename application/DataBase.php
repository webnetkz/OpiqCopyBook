<?php



class DataBase {

    public $pdo;

    private $login = 'root';
    private $password = 'ghbdtnltnrf1!!QQ';

    private $driver = 'mysql';
    private $host = 'localhost';
    private $dbname = 'buh';
    private $charset = 'utf8';
    private $port = '3306';
    private $option = [

        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // Errors mod
        PDO::ATTR_PERSISTENT => true // Continuous connect 

    ];

        

    public function __construct() {

        try {

            $this->pdo = new PDO(

                $this->driver .
                ':host=' . $this->host .
                ';dbname=' . $this->dbname .
                ';charset=' . $this->charset .
                ';port=' . $this->port ,
                $this->login,
                $this->password,
                $this->option
            
            );
        } catch(PDOExeption $errors) {
            exit($errors->gerMessage());
        }

    }

     // Запрос в базу данных
    public function query($sql, $params = []) {
        
        $stmt = $this->pdo->prepare($sql);

            if(!empty($params)) {
              
                foreach ($params as $key => $val) {
                    $stmt->bindValue(':'.$key, $val);
                }
            }

        $stmt->execute();
        return $stmt;

        return $query;
    }

       // Возврат строки
       public function row($sql, $params = []) {

        $result = $this->query($sql, $params);
        return $result->fetchAll(PDO::FETCH_ASSOC);
   }

     // Возврат колонки
    public function column($sql, $params = []) {

        $result = $this->query($sql, $params);
        return $result->fetchColumn(PDO::FETCH_ASSOC);
   }
}