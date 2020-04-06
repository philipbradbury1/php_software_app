<?php

class Customer extends Main{

    protected static $db_table = 'customers';

    protected static $db_table_fields = array('first_name', 'last_name', 'email', 'first_line_address', 'second_line_address', 'city', 'postcode', 'phone');

    public $id;
    public $first_name;
    public $last_name;
	public $email;
	public $first_line_address;
	public $second_line_address;
	public $city;
	public $postcode;
    public $phone;
    



}

?>