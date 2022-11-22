<?php
    class Database extends PDO{
    
    
     public function __construct($connect,$user,$pass){
           parent::__construct($connect,$user,$pass);
        
         }
    public function select($sql,$data=array(),$fetchStyle=PDO::FETCH_ASSOC){
      $statement=$this->prepare($sql);
      foreach($data as $key=> $value){
        $statement->bindParam($key,$value);
      }
            
      $statement->execute();
      return $statement->fetchAll();
    }
    public function insert($table,$data){
      $keys= implode(",", array_keys($data));

            $values=":".implode(", :", array_keys($data));

            

            $sql="INSERT INTO $table($keys) VALUE($values)";

            $statement=$this->prepare($sql);

            foreach($data as $key=> $value){
                $statement->bindValue(":$key",$value);
              }

              return $statement->execute();
    }
    }

?>