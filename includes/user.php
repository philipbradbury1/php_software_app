

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


    public function delete(){

    }


    public function update(){

    }



    public static function verify_user($username, $password){
        $username = $username;
        $password = $password;

        $sql = "SELECT * FROM users WHERE ";
        $sql .= "user_username = '$username' AND ";
        $sql .= "user_password = '$password'";

        $the_result = self::find_query($sql);

        return !empty($the_result) ? $the_result : false;

    }


    public static function find_query($sql){

        global $database;

        $result = $database->query($sql);

        if(empty($result)){ return false; }

        $data = array();


        while($row = mysqli_fetch_array($result)){


            $data[] = $row;

        }


        return $data;

    }



    public static function find_all(){

        global $database;

        return static::find_query("SELECT * FROM users");

    }



    public static function find_by_id(){

    }


}

?>