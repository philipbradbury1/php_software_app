<?php

class User {

    public $id;
    public $first_name;
    public $last_name;
    public $email;
    public $username;
    public $password;


    public function create(){

        global $database;

        $sql = 'INSERT INTO users (first_name, last_name, email, password, username)';
        $sql .= " VALUES ('$this->first_name', '$this->last_name', '$this->email', '$this->password','$this->username')";

        if($database->query($sql)){

            $this->id = $database->connection->insert_id();
            return true;

        } else {

            return false;
        }
        
    }


    public function delete(){

        global $database;

        $sql = "DELETE FROM users WHERE id = $this->id";
        $database->query($sql);

        return (mysqli_affected_rows($database->connection) === 1) ? true : false;

    }


    public function update(){

        global $database;

        $sql = "UPDATE users SET last_name = '$this->last_name' WHERE id = '$this->id'";



        $database->query($sql);

        return (mysqli_affected_rows($database->connection) === 1) ? true : false;

    }



    public static function verify_user($username, $password){

        global $database;
        
        $username = $username;
        $password = $password;

        $sql = "SELECT * FROM users WHERE ";
        $sql .= "username = '$username' AND ";
        $sql .= "password = '$password'";

        $the_result = self::find_query($sql);

        return !empty($the_result) ? array_shift($the_result) : false;

    }


    public static function find_query($sql){

        global $database;

        $result = $database->query($sql);

        if(empty($result)){ return false; }

        $data = array();

        while($row = mysqli_fetch_array($result)){

            $data[] = static::instantation($row);
        }

        return $data;

    }


    public static function instantation($the_record) {

        //$calling_class = get_called_class();
    
        //$the_object = new $calling_class;

        $the_object = new User;
    
        foreach($the_record as $attribute => $value) {
    
            if($the_object->has_the_attribute($attribute)) {
                $the_object->$attribute = $value;
            }
        }
        return $the_object;
    
    }

    protected function has_the_attribute($attribute) {

        $object_properties = get_object_vars($this);
    
        return array_key_exists($attribute, $object_properties);
    }



    public static function find_all(){

        global $database;

        return static::find_query("SELECT * FROM users");

    }



    public static function find_by_id($id){

        $result_array =  static::find_query("SELECT * FROM users WHERE id = $id LIMIT 1");

        return !empty($result_array)? array_shift($result_array ) : false;

    }


}

?>