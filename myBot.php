<?php
header('Content-Type: text/html; charset=utf-8');
$token='5448056703:AAGxqInWqo5U9Wb1_VAPSV_SF1hrtawC878';
$message= file_get_contents("php://input");
$messageArray= json_decode($message, true);
$chat_id= $messageArray['message']['from']['id'];
$user_name=$messageArray['message']['from']['username'];
$first_name=$messageArray['message']['from']['first_name'];
$command= $messageArray['message']['text'];
	
	
	
	if($command == '/start' ){
		
		$link="salam";
				$url= "https://api.telegram.org/bot".$token."/sendMessage?chat_id=".$chat_id."&text=".$link;
				file_get_contents($url);
	
	}
	
	
	
	if($command == 'لینک ناشناس من'){
		
		
        $link="chetori?";
        $url= "https://api.telegram.org/bot".$token."/sendMessage?chat_id=".$chat_id."&text=".$link;
        file_get_contents($url);


		
    }
		
		
		
		
	
	

?>
