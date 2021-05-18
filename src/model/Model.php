<?php
class Model
{
 protected static $tableName = '';
 protected static $columns = [];
 protected $values = [];

 function __construct($arr){
     $this->loadFromArray($arr);
 }

 public function loadFromArray($arr){
    if($arr){
       
        foreach ($arr as $key => $value) {
           
            $this->$key = $value;

        }
    } 

 }

 public function __get($key){
   
    return $this->values[$key];

 }

 public function __set($key, $value){
    
    $this->values[$key] = $value;

 }

 public function getValues(){
     return $this->values;
 }

 public static function getOne($filters = [], $columns ='*'){
     
    $class = get_called_class();
    $result = static::getResultSetFromSelect($filters, $columns);

    return $result ? new $class($result->fetch_assoc()) : null;

 }

 public static function get($filters = [], $columns = '*' ){

    $objects = [];
    $result = static::getResultSetFromSelect($filters, $columns);
    if($result){
       
        $class = get_called_class();
       
        while ($row = $result->fetch_assoc()) {
            array_push($objects,new $class($row) );
       
        }

    }
    return $objects;

 }

 public static function getResultSetFromSelect($filters = [], $columns = '*'){

    $sql = "select ${columns} from " 
      .static::$tableName
      .static::getFilters($filters);

     $result = Database::getResultFromQuery($sql);
     if($result->num_rows === 0){
         return null;
     }
     else
     {
        return $result; 
     }

 }

 public function insert(){
     
    $sql = "insert into ".static::$tableName." ("
     .implode(",", static::$columns). ") values (";
    
     foreach (static::$columns as $col) {
         $sql .= static::getFormatedValues($this->$col). ",";
     }

     $sql[strlen($sql) - 1] = ')';

     $id = Database::executeSQL($sql);

     $this->id = $id;
 } 
  public function update() {
        $sql = "UPDATE " . static::$tableName . " SET ";
        foreach(static::$columns as $col) {
            $sql .= " ${col} = " . static::getFormatedValue($this->$col) . ",";
        }
        $sql[strlen($sql) - 1] = ' ';
        $sql .= "WHERE id = {$this->id}";
        Database::executeSQL($sql);
    }

 public static function deletebyid($id){
     if($id == 0){
      $sql = "delete from ".static::$tableName." where id <> {$id}";
      Database::executeSQL($sql);
        
     }
     $sql = "delete from ".static::$tableName." where id = {$id}";
     Database::executeSQL($sql);
 }


 private static function getFilters($filters){

    $sql = '';
    if(count($filters) > 0){
        $sql .= " where 1 = 1 ";

        foreach ($filters as $column => $value) {
           
            $sql .= " And ${column} = ".static::getFormatedValues($value);

        }
    }

    return $sql;

 }

 private static function getFormatedValues($value){

    if(is_null($value)){
        
        return "null";

    }elseif(gettype($value) === 'string'){
        
        return "'{$value}'";

    }
    else{

        return $value;
    }

 }
 
}


?>