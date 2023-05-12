<?php

Class Database {

    static function get_db_connection (){
        $server_name = "***";
        $db_name = "***";
        $db_username = "***";
        $db_password= "***";
        $dsn = "mysql:host=$server_name;dbname=$db_name;charset=utf8";
        try{
            $connection = new PDO($dsn, $db_username, $db_password);
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $connection;
        } catch (PDOException $error) {
            echo "Connection failed". $error->getMessage();
            exit;
        }
    }

    static function get_all_projects ($db_connection){
        try{
            $all_projects_query = "SELECT * FROM projects";
            $stmt = $db_connection->query($all_projects_query);
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            if (count($result) > 0) {
                return $result;
            }
            else {
                echo "0 Results";
            }
        }catch (PDOException $error){
            echo "there was a problem". $error->getMessage();
        }
    }
}



?>