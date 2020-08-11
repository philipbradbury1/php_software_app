<?php

class Job extends Main{

    protected static $db_table = 'job';

    protected static $db_table_fields = array('book_in', 'completion', 'damage', 'owner_id', 'vehicle_id');



    public $id;
    public $book_in;
    public $completion;
    public $damage;
    public $owner_id;
    public $vehicle_id;
    public $vehicle_reg;
    public $vehicle_make;
    public $vehicle_model;
    public $first_name;
    public $last_name;


    public static function find_all_jobs(){

        global $database;

        return static::find_query("SELECT job.id, job.book_in, job.completion ,vehicle.vehicle_reg, vehicle.vehicle_make, vehicle.vehicle_model, customers.first_name, customers.last_name  
                                   FROM ".static::$db_table ."
                                   LEFT JOIN vehicle ON job.vehicle_id = vehicle.id
                                   LEFT JOIN customers ON job.owner_id = customers.id");

    }




}


?>