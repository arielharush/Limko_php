<?php
//include "Audio.php";
class Message{
    var $message_id; // int
    var $from; // user
    var $date; // int
    var $chat; // chat 
    var $forward_from; // user
    var $forward_from_chat; //chat
    var $forward_from_message_id; // int
    var $forward_signature; //string
    var $forward_sender_name; // string
    var $forward_date; // int
    var $reply_to_message; // message
    var $edit_date; //int
    var $media_group_id; // string
    var $author_signature; // string
    var $text; // string
    var $audio; // audio
    //var $document; //document
    //var $animation; // animation
    //var $photo; // photo
    //var $sticker; // sticker
    //var $video; // video
    //var $voice; // voice
    //var $contact;// contact
    //var $location; // location
    function __construct()
    {
        
    }
    public function set_audio($audio){
        $this->audio = $audio;
    }
    public function loadFromArray($array){

        $this->message_id = $array['message_id'];
        $this->message_id;
        $this->from = new User();
        $this->from->loadFromArray($array['from']);
        $this->date = $array['date'];
        $this->chat = new Chat();
        $this->chat->loadFromArray($array['chat']);
        if(array_key_exists('forward_from',$array)){
            $this->forward_from = new User();
            $this->forward_from->loadFromArray($array['forward_from']);
        }else{
            $this->forward_from = '';
        }

        if(array_key_exists('forward_from_chat',$array)){
            $this->forward_from_chat = new Chat();
            $this->forward_from_chat->loadFromArray($array['forward_from_chat']);
        }else{
            $this->forward_from_chat = '';
        }

        if(array_key_exists('text',$array)){
            $this->text = $array['text'];
        }else{
            $this->text = '';
        }
        if(array_key_exists('forward_sender_name',$array)){
            $this->forward_sender_name = $array['forward_sender_name'];
        }else{
            $this->forward_sender_name = '';
        }
       
      

    }
    public function get_audio(){
        return $this->audio;
    }

    public function get_message_id(){
        return $this->message_id;
    }

    public function set_message_id($message_id){
        $this->message_id = $message_id;

    }


    public function get_from(){
        return $this->from;
    }
    public function get_chat(){
        return $this->chat;
    }
    public function set_from($from){
        $this->from = $from;
    }




    public function __toString()
    {
        
        $string =  '<br>';
        $string= $string. 'message id: '.$this->message_id.'<br>';
        
        if($this->from != ''){
            $string= $string. 'from: ';
            $string= $string.$this->from;
            $string= $string. '<br>';
        }
        
       
        $string= $string. 'date: '.$this->date.'<br>';
       
        if($this->chat != ''){
            $string= $string. 'chat: ';
            $string= $string.$this->chat;
            $string= $string.'<br>';
        }
        
        
       
        if($this->forward_from != ''){
            $string= $string. 'forward_from: ';
            $string= $string.$this->forward_from;
            $string= $string. '<br>';
        }
       
        
        if($this->forward_from_chat != ''){
            $string= $string. 'forward_from_chat: ';
            $string= $string.$this->forward_from_chat;
            $string= $string. '<br>';
        }
      
       if($this->forward_sender_name != ''){
        $string= $string. 'forward sender name: '.$this->forward_sender_name;
       }

       
       if($this->text != ''){
        $string= $string. 'text: '.$this->text;
       }
        return $string;
    }


    function print_a(){
        //echo $this->audio;
    }
}

