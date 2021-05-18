<?php

class Database 
{ //Coneção com o banco
    public static function getConnection(){
        
        $envPath = realpath(dirname(__FILE__) . '/../env.ini');
        $env = parse_ini_file($envPath);
        $conn = new mysqli($env['host'],$env['username'],$env['password'],$env['database']);

        if($conn->connect_error){

            die("Error " . $conn->connect_error);
        }

        return $conn;
    }
    
    // Função de listar as tabelas
    public static function getResultFromQuery($sql){
       
        $conn = self::getConnection();
        $result = $conn->query($sql);
        $conn->close();

        return $result;
    } 

    public static function executeSQL($sql){
        
        $conn = self::getConnection();
        if(!mysqli_query($conn,$sql)){
            throw new Exception(mysqli_erro($conn));
        }
        $id = $conn->insert_id;
        $conn->close();
        return $id;

    }
}


?>