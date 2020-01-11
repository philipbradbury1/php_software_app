
<?php

require_once('database_configuration.php');

class Database { 

    public $connection;


    public function open_db_connection(){
        $this->connection = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    }

}

$database = new Database();


?>