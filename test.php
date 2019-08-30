<?php
$content = '{"update_id":74673357,"message":{"message_id":61,"from":{"id":896495771,"is_bot":false,"first_name":"\u200e","last_name":"\u200e","username":"abtza1","language_code":"he"},"chat":{"id":896495771,"title":"g","type":"group","all_members_are_administrators":true},"date":1563472747,"text":"h"}}';

$update = json_decode($content, true);
$boto = '828249115:AAHCsXdvJwCKtkzOiZBZtCcMk6d3SrM77LI';
//$text_send = 'פה ת9[-[היה השאלה';
include 'User.php';
include 'Chat.php';
include 'SendMessage.php';
include 'Message.php';
$msg = new Message();
$msg->loadFromArray($update['message']);
$chatId = $msg->get_chat()->get_id();
//$chatId = $update['message']['chat']['id'];
print_r($msg);
SendMessage::sendText('828249115:AAHCsXdvJwCKtkzOiZBZtCcMk6d3SrM77LI',$chatId,str_replace('<br>',"\n",$msg.''),'','false','flase');
























//file_get_contents('https://api.telegram.org/bot828249115:AAHCsXdvJwCKtkzOiZBZtCcMk6d3SrM77LI/sendMessage?chat_id='.$chatId.'&text='.str_replace('<br>','%0A',$msg.''));
//file_get_contents('https://api.telegram.org/bot828249115:AAHCsXdvJwCKtkzOiZBZtCcMk6d3SrM77LI/sendMessage?chat_id=896495771&text='.$content);
//file_get_contents('https://api.telegram.org/bot828249115:AAHCsXdvJwCKtkzOiZBZtCcMk6d3SrM77LI/sendMessage?chat_id=896495771&text='.str_replace('<br>','%0A',$msg.''));
//$buton = '{"inline_keyboard":[[{"text":",תשובה א","callback_data":"starttest"}],[{"text":"צור קשר","url":"telegram.me/abtza1"}],[{"text":"תשובה ב","callback_data":"set^a"}]]}';
//$url = 'https://api.telegram.org/bot'.$boto.'/sendMessage?chat_id='.$chatId.'&text='.$text_send.'&parse_mode=HTML&disable_web_page_preview=true&reply_markup='.$buton;
//file_get_contents($url); 
//file_get_contents('https://api.telegram.org/bot828249115:AAHCsXdvJwCKtkzOiZBZtCcMk6d3SrM77LI/sendMessage?chat_id=896495771&text='.$content);
//file_get_contents('https://api.telegram.org/bot828249115:AAHCsXdvJwCKtkzOiZBZtCcMk6d3SrM77LI/sendMessage?chat_id=896495771&text='();
 //$stf = json_decode('{"update_id":74673349,"message":{"message_id":45,"from":{"id":896495771,"is_bot":false,"first_name":"\u200e","last_name":"\u200e","username":"abtza1","language_code":"he"},"chat":{"id":896495771,"first_name":"\u200e","last_name":"\u200e","username":"abtza1","type":"private"},"date":1563470668,"text":"."}}' , true);
//$stf = json_decode('{"update_id":74673351,"message":{"message_id":49,"from":{"id":896495771,"is_bot":false,"first_name":"\u200e","last_name":"\u200e","username":"abtza1","language_code":"he"},"chat":{"id":896495771,"first_name":"\u200e","last_name":"\u200e","username":"abtza1","type":"private"},"date":1563470971,"photo":[{"file_id":"AgADBAAD2rIxG0ABgVGfS7uHddpSLFlRqBsABPJJRtdn7TDRyzoAAgI","file_size":1364,"width":90,"height":51},{"file_id":"AgADBAAD2rIxG0ABgVGfS7uHddpSLFlRqBsABKq5MMdPm-VLzDoAAgI","file_size":16481,"width":320,"height":180},{"file_id":"AgADBAAD2rIxG0ABgVGfS7uHddpSLFlRqBsABI4ZtmPWXX_qzToAAgI","file_size":66667,"width":800,"height":449},{"file_id":"AgADBAAD2rIxG0ABgVGfS7uHddpSLFlRqBsABMqCFOoMHXAizjoAAgI","file_size":135914,"width":1280,"height":719}]}}',true);
//$stf = json_decode('{"update_id":74673355,"message":{"message_id":57,"from":{"id":896495771,"is_bot":false,"first_name":"\u200e","last_name":"\u200e","username":"abtza1","language_code":"he"},"chat":{"id":896495771,"first_name":"\u200e","last_name":"\u200e","username":"abtza1","type":"private"},"date":1563472012,"document":{"file_name":"\u05de\u05d1\u05d5\u05d0 \u05dc\u05d0\u05d1\u05d8\u05d7\u05ea \u05de\u05d9\u05d3\u05e2 \u05ea\u05e8\u05d2\u05d9\u05dc 7.docx","mime_type":"application/vnd.openxmlformats-officedocument.wordprocessingml.document","file_id":"BQADBAADkQYAAkABgVFjw7fpPNFlyAI","file_size":13838}}}', true);
//file_get_contents('https://api.telegram.org/bot828249115:AAHCsXdvJwCKtkzOiZBZtCcMk6d3SrM77LI/deleteMessage?chat_id=896495771&message_id=162');


//  add bot to group
//$stf = json_decode('{"update_id":74673356,"message":{"message_id":59,"from":{"id":896495771,"is_bot":false,"first_name":"abc","last_name":"def","username":"abtza1","language_code":"he"},"chat":{"id":-348172605,"title":"g","type":"group","all_members_are_administrators":true},"date":1563472533,"new_chat_participant":{"id":828249115,"is_bot":true,"first_name":"\u05ea\u05e9\u05dc\u05d5\u05de\u05d9\u05dd","username":"pays_arielBot"},"new_chat_member":{"id":828249115,"is_bot":true,"first_name":"\u05ea\u05e9\u05dc\u05d5\u05de\u05d9\u05dd","username":"pays_arielBot"},"new_chat_members":[{"id":828249115,"is_bot":true,"first_name":"\u05ea\u05e9\u05dc\u05d5\u05de\u05d9\u05dd","username":"pays_arielBot"}]}}',true);
//print_r($stf);
$stf = json_decode('{"update_id":74673357,"message":{"message_id":61,"from":{"id":896495771,"is_bot":false,"first_name":"\u200e","last_name":"\u200e","username":"abtza1","language_code":"he"},"chat":{"id":-348172605,"title":"g","type":"group","all_members_are_administrators":true},"date":1563472747,"text":"h"}}' , true);


//$user = new User();
//$user->print();
//$user->loadFromArray($stf['message']['from']);
//$user->print();

//print($msg);
// msg in grup




// user send poll
//$stf = json_decode('{"update_id":74673358,"message":{"message_id":63,"from":{"id":547502402,"is_bot":false,"first_name":"\u200e"},"chat":{"id":-348172605,"title":"g","type":"group","all_members_are_administrators":true},"date":1563472929,"poll":{"id":"5875273939600539650","question":"ariel","options":[{"text":"ggg","voter_count":0},{"text":"gg","voter_count":0},{"text":"ggg","voter_count":0},{"text":"5j6k75l98;","voter_count":0},{"text":"346547","voter_count":0},{"text":"5666565","voter_count":0},{"text":"yt","voter_count":0}],"is_closed":false}}}' ,true);


// edit msg 
//$stf = json_decode('{"update_id":74673359,"edited_message":{"message_id":32,"from":{"id":896495771,"is_bot":false,"first_name":"\u200e","last_name":"\u200e","username":"abtza1","language_code":"he"},"chat":{"id":896495771,"first_name":"\u200e","last_name":"\u200e","username":"abtza1","type":"private"},"date":1563469224,"edit_date":1563473391,"text":".g"}}', true);



//print_r($stf);
 // $timestamp=1563470668;
 // echo gmdate("", $timestamp);
/* $myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
$txt = $content;
fwrite($myfile, $txt);
fclose($myfile);
*/
