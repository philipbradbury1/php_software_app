<?php

class Main  {


    protected function properties() {

        $properties = array();
    
        foreach(static::$db_table_fields as $db_field) {
    
            if(property_exists($this, $db_field)) {
    
                $properties[$db_field] = $this->$db_field;
            }
        }
    
        return $properties;
    }
    


    public function create(){

        global $database;

        $properties = $this->properties();
        
        $sql = 'INSERT INTO '. static::$db_table . "(". implode(",", array_keys($properties)) . ")";
        $sql .= " VALUES ('" . implode("','", array_values($properties)) . "')";

        if($database->query($sql)){

            $this->id = $database->insert_id();
            return true;

        } else {

            return false;
        }

    }


    public function delete(){

        global $database;

        $sql = "DELETE FROM " .static::$db_table . " WHERE id =". $this->id;
        $database->query($sql);

        return (mysqli_affected_rows($database->connection) === 1) ? true : false;

    }


    public function update(){

        global $database;

        $sql = "UPDATE users SET last_name = '$this->last_name' WHERE id = '$this->id'";



        $database->query($sql);

        return (mysqli_affected_rows($database->connection) === 1) ? true : false;

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

        $calling_class = get_called_class();
    
        $the_object = new $calling_class;
    
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

        return static::find_query("SELECT * FROM ". static::$db_table);

    }



    public static function find_by_id($id){

        $result_array =  static::find_query("SELECT * FROM ". static::$db_table ." WHERE id = $id LIMIT 1");

        return !empty($result_array)? array_shift($result_array ) : false;

    }










}

?>