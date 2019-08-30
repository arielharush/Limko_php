<?php
class Curl{
 
    public static function SendCurl($url , $parms){
    
        
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $parms);
        //curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0); //  if have error with ssl
        $response = curl_exec($ch);
        if(curl_errno($ch)){
            echo 'Request Error:' . curl_error($ch);
        }
        curl_close($ch);
        $response =json_decode($response, true);
        return $response;
    }

  
}
/*
$post = [
    'chat_id' => '896495771',
    'text' => 'passuser1'
    
];
$file = "Document.php";
$file = realpath($file);
echo $file;
$file = new CURLFile($file);

$post1 = [
    'chat_id' => '896495771',
    'document' => $file
];


$respons = Curl::SendCurl('https://api.telegram.org/bot828249115:AAHCsXdvJwCKtkzOiZBZtCcMk6d3SrM77LI/sendDocument' , $post1);
//$respons = Curl::SendCurl('https://api.telegram.org/bot828249115:AAHCsXdvJwCKtkzOiZBZtCcMk6d3SrM77LI/sendMessage' , $post);

print_r($respons);
*/