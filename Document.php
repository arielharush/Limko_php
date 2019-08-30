<?php
class Document{
    var $file_id; // string
    //var $thumb; // PhotoSize
    var $file_name; // string
    var $mime_type; // string
    var $file_size; // int
    function __construct(){}
    function get_file_id(){
        return $this->file_id;
    }

    function set_file_id($file_id){
        $this->file_id = $file_id;
    }




    function get_file_name(){
        return $this->file_name;
    }

    function set_file_name($file_name){
        $this->file_name= $file_name;
    }




    function get_mime_type(){
        return $this->mime_type;
    }

    function set_mime_type($mime_type){
        $this->mime_type = $mime_type;
    }


    function get_file_size(){
        return $this->file_size;
    }

    function set_file_size($file_size){
        $this->file_size = $file_size;
    }


}