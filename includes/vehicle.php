<?php

class Vehicle extends Main{

    protected static $db_table = 'vehicle';

    protected static $db_table_fields = array('vehicle_reg', 'vehicle_make', 'vehicle_model', 'vehicle_colour', 'vehicle_type','owner_id');



    public $id;
    public $vehicle_reg;
    public $vehicle_make;
	public $vehicle_model;
	public $vehicle_colour;
	public $vehicle_type;
	public $owner_id;



    



}


?>