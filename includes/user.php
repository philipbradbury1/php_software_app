<?php

class User extends Main{


    protected static $db_table = 'users';

    protected static $db_table_fields = array('first_name', 'last_name', 'email', 'password', 'username');

    public $id;
    public $first_name;
    public $last_name;
    public $email;
    public $username;
    public $password;


    public static function verify_user($username, $password){

        global $database;
        
        $username = $username;
        $password = $password;

        $sql = "SELECT * FROM ". $db_table ." WHERE ";
        $sql .= "username = '$username' AND ";
        $sql .= "password = '$password'";

        $the_result = self::find_query($sql);

        return !empty($the_result) ? array_shift($the_result) : false;

    }

}

?>