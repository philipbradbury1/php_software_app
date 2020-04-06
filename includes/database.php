<?php

require_once('database_configuration.php');

class Database { 

    public $connection;


    public function __construct(){
		
		$this->open_db_connection();
	}


    public function open_db_connection(){
        $this->connection = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        
    }


    public function query($sql){

        $result = $this->connection->query($sql);

        return $result;

    }

    public function insert_id() {

		return $this->connection->insert_id;  
	}


}

$database = new Database();


?>