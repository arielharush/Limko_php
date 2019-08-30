<?php
class Chat{
var $id; // int
var $type; // string - “private”, “group”, “supergroup” ..
var $title; // string
var $username; // string
var $first_name;  // string
var $last_name;// string
var $all_members_are_administrators; // bool
 // var photo; // array of photos
var $description; //string
var $invite_link; // string
// var $pinned_message; // msg
var $sticker_set_name; // string
var $can_set_sticker_set; // bool


function __construct()
{
    
}

public function get_id(){
    return $this->id;
}


public function set_id($id){
    return $this->id = $id;
}


public function get_type(){
    return $this->type;
}
public function set_type($type){
    return $this->type = $type;
}

    
public function get_title(){
    return $this->title;
}
public function set_title($title){
    return $this->title = $title;
}


public function get_username(){
    return $this->username;
}
public function set_username($username){
    return $this->username = $username;
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




public function get_all_members_are_administrators(){
    return $this->all_members_are_administrators;
}

public function set_all_members_are_administrators($all_members_are_administrators){
    return $this->all_members_are_administrators = $all_members_are_administrators;
}



public function get_description(){
    return $this->description;
}

public function set_description($description){
    return $this->description = $description;
}




public function get_invite_link(){
    return $this->invite_link;
}

public function set_invite_link($invite_link){
    return $this->invite_link = $invite_link;
}


public function get_sticker_set_name(){
    return $this->sticker_set_name;
}

public function set_sticker_set_name($sticker_set_name){
    return $this->sticker_set_name = $sticker_set_name;
}


public function get_can_set_sticker_set(){
    return $this->can_set_sticker_set;
}

public function set_can_set_sticker_set($can_set_sticker_set){
    return $this->can_set_sticker_set = $can_set_sticker_set;
}


public function loadFromArray($array){
    $this->id = $array['id'];
    if(array_key_exists('first_name',$array)){
        $this->first_name = $array['first_name'];
    }else{
        $this->first_name = '';
    }
    if(array_key_exists('last_name',$array)){

        $this->last_name = $array['last_name'];
    }else{
        $this->last_name = '';
    }
    if(array_key_exists('username',$array)){

        $this->username = $array['username'];
    }else{
        $this->username = '';
    }
    if(array_key_exists('type',$array)){

        $this->type = $array['type'];
    }else{
        $this->type = '';
    }
    if(array_key_exists('title',$array)){

        $this->title = $array['title'];
    }else{
        $this->title = '';
    }
    if(array_key_exists('all_members_are_administrators',$array)){

        $this->all_members_are_administrators = $array['all_members_are_administrators'];
    }else{
        $this->all_members_are_administrators = '';
    }
    if(array_key_exists('description',$array)){

        $this->description = $array['description'];
    }else{
        $this->description = '';
    }
    if(array_key_exists('invite_link',$array)){

        $this->invite_link = $array['invite_link'];
    }else{
        $this->invite_link = '';
    }
    if(array_key_exists('sticker_set_name',$array)){

        $this->sticker_set_name = $array['sticker_set_name'];
    }else{
        $this->sticker_set_name = '';
    }
    if(array_key_exists('can_set_sticker_set',$array)){

        $this->can_set_sticker_set = $array['can_set_sticker_set'];
    }else{
        $this->can_set_sticker_set = '';
    }

}


public function __toString()
{
    $string = '';
    $string = $string.'id: '.$this->id.'<br>';
    $string = $string.'type: '.$this->type.'<br>';
    if($this->username != ''){
        $string = $string.'username: '.$this->username.'<br>';
    }
    $string = $string.'first_name: '.$this->first_name.'<br>';

    if($this->last_name != ''){
        $string = $string.'last_name: '.$this->last_name.'<br>';

    }
    

   // $string = $string.'all_members_are_administrators: '.$this->all_members_are_administrators.'<br>';
    if($this->description != ''){
        $string = $string.'description: '.$this->description.'<br>';
    }
    if($this->invite_link != ''){
        $string = $string.'invite_link: '.$this->invite_link.'<br>';
    }
    
    $string = $string.'sticker_set_name: '.$this->sticker_set_name.'<br>';
    $string = $string.'can_set_sticker_set: '.$this->can_set_sticker_set.'<br>';
    return $string;
}

}