<?php

class Base_model
{
    private $db;    
    private $dbh;
    
    protected $sql;
    private $stmt;

    // uncertain howerver the $data actually needs to be static.
    // at the moment the content is not sent to the view if declared as non static
    protected static $data;

    public function __construct()
    {
        $this->db = Db::getInstance();
        $this->dbh = $this->db->getConnection();
        
    }

    public function prepQuery($sql, $paramBinds = [])
    {
                
        $this->stmt = $this->dbh->prepare($sql);
        
        if($paramBinds != []){
            // bindParam needs a variable, therefore the value to be bound is passed by reference
            foreach ($paramBinds as $key => &$value) {
                $this->stmt->bindParam($key, $value);
                        
            }
        }
        
        if($this->stmt->execute())
        {
            return true;
        } else {
            return false;
        }
        
    }

    public function getAll()
    {
        self::$data = $this->stmt->fetchAll(PDO::FETCH_ASSOC);
        return self::$data;
    }

    public function getOne()
    {
        self::$data = $this->stmt->fetch(PDO::FETCH_ASSOC);
        return self::$data;
    }
}