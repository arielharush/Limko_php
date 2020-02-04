<?php
include 'Curl.php';
class SendMessage{
    public static function sendText($url,$chat_id,$text , $parse_mode , $disable_web_page_preview ,$disable_notification , $reply_to_message_id = ''){

        $data = array('chat_id'=> $chat_id,
        'text' => $text,
        'parse_mode'=> 'HTML',
        'disable_web_page_preview'=>$disable_web_page_preview,
        'disable_notification' => $disable_notification
    );
    if($reply_to_message_id != ''){
     $data =array_merge($data , array('reply_to_message_id' =>$reply_to_message_id));
    }
   // print_r($data);
    print_r(curl::SendCurl('https://api.telegram.org/bot'.$url.'/sendMessage',$data));
    }
    
    public static function sendTextWithReplyMarkup($url,$chat_id,$text , $parse_mode , $disable_web_page_preview ,$disable_notification ,$reply_markup , $reply_to_message_id = ''){


        
    }
}

// SendMessage::sendText('https://api.telegram.org/:/sendMessage','','34','56','true','false','');
