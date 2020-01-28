

<?php

class User {

    public $id;
    public $first_name;
    public $last_name;
    public $email_address;
    public $username;
    public $password;



    public function create(){

        global $database;

        $sql = "INSERT INTO users (user_first_name, user_last_name, user_email, user_password, user_username)";
        $sql .= " VALUES ('$this->first_name', '$this->last_name', '$this->email_address', '$this->password','$this->username')";


        if($database->query($sql)){

            $this->id = $database->connection->insert_id;
            return true;

        } else {

            return false;
        }


        
    }



    public static function verify_user($username, $password){
        $username = $username;
        $password = $password;

        $sql = "SELECT * FROM users WHERE ";
        $sql .= "username = '$username' AND ";
        $sql .= "password = '$password'";



        



    }



}

?>