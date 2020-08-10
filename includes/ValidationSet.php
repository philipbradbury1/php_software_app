<?php

class ValidationSet {


    private $data;
    private $errors = [];
    private static $fields = [];


    public function __construct($post_data){
        $this->data = $post_data;

        foreach($this->data as $key => $value){
            array_push(self::$fields, $key); 
        }

    }


    public function validateForm(){

        foreach(self::$fields as $field){
            if(!array_key_exists($field, $this->data)){
                trigger_error("$field is not present in data");
                return;
            }
        }

        $this->validateFirstName();
        $this->validateSecondName();
        $this->validateEmailAddress();
        $this->validateFirstLine();
        $this->validateSecondLine();
        $this->validateCity();
        $this->validatePostcode();
        $this->validatePhone();
        $this->validateReg();
        $this->validateMake();
        $this->validateModel();
        $this->validateStyle();
        $this->validateColor();
        $this->validateMileage();
        $this->validateBookin();
        $this->validateCompletion();
        $this->validateDamage();

        
        return $this->errors;
  
    }

    private function validateFirstName(){

        $val = trim($this->data['add-job-form-first-name']);

        if(empty($val)){
            $this->addError('First Name', 'First Name cannot be empty');
        } else {
            if(!preg_match('/^[a-zA-Z]/', $val)){
                $this->addError('First Name', 'First Name must be letters only');
            }
        }

    }

    private function validateSecondName(){

    }

    private function validateEmailAddress(){

    }

    private function validateFirstLine(){

    }

    private function validateSecondLine(){

    }

    private function validateCity(){

    }


    private function validatePostcode(){

    }

    private function validatePhone(){

    }

    private function validateReg(){

    }

    private function validateMake(){

    }

    private function validateModel(){

    }

    private function validateStyle(){

    }

    private function validateColor(){

    }

    private function validateMileage(){

    }

    private function validateBookin(){

    }

    private function validateCompletion(){

    }

    private function validateDamage(){

    }



    private function addError($key, $val){

        $this->errors[$key] = $val;

    } 












}


?>