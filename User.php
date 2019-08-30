<?php
class User{
var $id;
var $is_bot;
var $first_name; 
var $last_name;
var $username;
var $language_code;

function __construct( $is_bot = false, $first_name = "" ,$last_name = "" ,$username = "" , $language_code = 0)
{
    
    $this->is_bot = $is_bot;
    $this->first_name = $first_name;
    $this->last_name = $last_name;
    $this->username = $username;
    $this->language_code = $language_code;
}
public function get_id(){
    return $this->id;
}

public function get_is_bot(){
    return $this->is_bot;
}

public function set_is_bot($is_bot){
    return $this->is_bot = $is_bot;
}

public function get_first_name(){
    return $this->first_name;
}

public function set_first_name($first_name){
    return $this->first_name = $first_name;
}


public function get_last_name(){
    return $this->last_name;
}

public function set_last_name($last_name){
    return $this->last_name = $last_name;
}



public function get_username(){
    return $this->username;
}

public function set_username($username){
    return $this->username = $username;
}




public function get_language_code(){
    return $this->language_code;
}

public function set_language_code($language_code){
    return $this->language_code = $language_code;
}


function __toString()
{
    $string= '';
    $string= $string. 'id: '.$this->id.'<br>';
    $string= $string. 'is_bot: ';
    if($this->is_bot == false){
        $string= $string. "false";
    }else {
        $string= $string. "true";
    }
    $string= $string. '<br>';
    $string= $string. 'first name: '.$this->first_name.'<br>';
    if($this->last_name != ''){
        $string= $string. 'last name: '.$this->last_name.'<br>';
    }
    if($this->username != ''){
        $string= $string. 'user name: '.$this->username.'<br>';

    }

    if($this->language_code != ''){
        $string= $string. 'language_code: '.$this->language_code.'<br>';

    }
   
    
    
    return $string;

}

    public function loadFromArray($array){
        $this->id = $array['id'];
        $this->is_bot = $array['is_bot'];
        $this->first_name = $array['first_name'];
        $this->last_name = $array['last_name'];
        $this->username = $array['username'];
        $this->language_code = $array['language_code'];
        
    }
}


