	<?php
	date_default_timezone_set('Asia/Singapore');
	require_once('./line_class.php');
	$channelAccessToken = 'foHivR9RW1cwM7LwHhSBOPTAjGa8o8kbmomtLhC906UPPWoB1gIsMhCXh7oE9bGA4HcnU1iGygo06OflcHmU827yGqF3qGQtwPReKwcx+QTOKHKqRFcCDFysPvqeHESKUm4Ey4gPabfHkJeT5FzOdQdB04t89/1O/w1cDnyilFU='; //sesuaikan 
	$channelSecret = 'c1ab49d4f21251d9632f634a25605d24';//sesuaikan
	$client = new LINEBotTiny($channelAccessToken, $channelSecret);
	//var_dump($client->parseEvents());
	//$_SESSION['userId']=$client->parseEvents()[0]['source']['userId'];
	/*
	{
	  "replyToken": "nHuyWiB7yP5Zw52FIkcQobQuGDXCTA",
	  "type": "message",
	  "timestamp": 1462629479859,
	  "source": {
		"type": "user",
		"userId": "U206d25c2ea6bd87c17655609a1c37cb8"
	  },
	  "message": {
		"id": "325708",
		"type": "text",
		"text": "Hello, world"
	  }
	}
	*/
	$userId 	= $client->parseEvents()[0]['source']['userId'];
	$replyToken = $client->parseEvents()[0]['replyToken'];
	$timestamp	= $client->parseEvents()[0]['timestamp'];
	$message 	= $client->parseEvents()[0]['message'];
	$messageid 	= $client->parseEvents()[0]['message']['id'];
	$profil = $client->profil($userId);
	$pesan_datang = $message['text'];
	$wita= date_default_timezone_set['Asia/Singapore'];
	$jam = date("H.i.s ");
	//pesan bergambar
	if($message['type']=='text')
	{
		if($pesan_datang=='Halo')
		{
			
			
			$balas = array(
								'replyToken' => $replyToken,														
								'messages' => array(
									array(
											'type' => 'text',					
											'text' => 'Halo ' .$profil->displayName.''
										)
								)
							);
					
		}
		else
				if($pesan_datang=='link fotoku')
		{
			
			
			$balas = array(
								'replyToken' => $replyToken,														
								'messages' => array(
									array(
											'type' => 'text',					
											'text' => 'Link Foto Kamu : ' .$profil->pictureUrl.''
										)
								)
							);
					
		}
		else
				if($pesan_datang=='status')
		{
			
			
			$balas = array(
								'replyToken' => $replyToken,														
								'messages' => array(
									array(
											'type' => 'text',					
											'text' => 'Status Message Kamu : ' .$profil->statusMessage.''
										)
								)
							);
					
		}
		else
				if($pesan_datang=='stickernya mana?')
		{
			
			
			$balas = array(
								'replyToken' => $replyToken,														
								'messages' => array(
									array(
											'type' => 'sticker',					
											'packageId'=> '1',
											'stickerId'=> '2'
										)
								)
							);
					
		}
		else
		if($pesan_datang=='2')
		{
			$get_sub = array();
			$aa =   array(
							'type' => 'image',									
							'originalContentUrl' => 'https://medantechno.com/line/images/bolt/1000.jpg',
							'previewImageUrl' => 'https://medantechno.com/line/images/bolt/240.jpg'	
							
						);
			array_push($get_sub,$aa);	
			$get_sub[] = array(
										'type' => 'text',									
										'text' => 'Halo '.$profil->displayName.', Anda memilih menu 2, harusnya gambar muncul.'
									);
			
			$balas = array(
						'replyToken' 	=> $replyToken,														
						'messages' 		=> $get_sub
					 );	
			/*
			$alt = array(
								'replyToken' => $replyToken,														
								'messages' => array(
									array(
											'type' => 'text',					
											'text' => '[*] '.join(str(f) for f in dataResult).'
										)
								)
							);
			*/
			//$client->replyMessage($alt);
		}
		else if (strstr($pesan_datang=='#event')) {
                    if ($event->isRoomEvent()) {
                        $msg = "RoomId:" . $event->getRoomId();
                    } else if ($event->isUserEvent()) {
                        $msg = "UserId:" . $event->getUserId();
                    } else if ($event->isGroupEvent()) {
                        $msg = "GroupId:" . $event->getGroupId();
                    }
                    $bot->replyText($reply_token, $msg);
                } 
		
		else
		if($pesan_datang=='3')
		{
			
			$balas = array(
								'replyToken' => $replyToken,														
								'messages' => array(
									array(
											'type' => 'text',					
											'text' => 'Fungsi PHP base64_encode medantechno.com :'. base64_encode("medantechno.com")
										)
								)
							);
					
		}
		else
		if($pesan_datang=='/jam')
		{
			
			$balas = array(
								'replyToken' => $replyToken,														
								'messages' => array(
									array(
											'type' => 'text',					
											'text' => 'Wita : '. date('H.i.s')
										)
								)
							);
					
		}
		else
		if($pesan_datang=='Lokasi Bot')
		{
			
			$balas = array(
								'replyToken' => $replyToken,														
								'messages' => array(
									array(
											'type' => 'location',					
											'title' => 'Lokasi Saya.. Klik Detail',					
											'address' => 'McDonald',					
											'latitude' => '-8.700088',					
											'longitude' => '115.178097' 
										)
								)
							);
					
		}
		else
		if($pesan_datang=='7')
		{
			
			$balas = array(
								'replyToken' => $replyToken,														
								'messages' => array(
									array(
											'type' => 'text',					
											'text' => 'Testing PUSH pesan ke anda'
										)
								)
							);
							
			$push = array(
								'to' => $userId,									
								'messages' => array(
									array(
											'type' => 'text',					
											'text' => 'Pesan ini dari medantechno.com'
										)
								)
							);
							
							
		}
	}else if($message['type']=='sticker')
	{	
		$balas = array(
								'replyToken' => $replyToken,														
								'messages' => array(
									array(
											'type' => 'text',									
											'text' => 'Terimakasih stikernya... '										
										
										)
								)
							);
		
$response = $bot->leaveRoom('<groupId>');
echo $response->getHTTPStatus() . ' ' . $response->getRawBody();		
	}
	if($signature && $sdk->validateSignature($postdata, $signature)) {
    // Next, extract the messages
    if(is_array($messages)) {
        foreach ($messages as $message) {
            if ($message instanceof LINEBot\Receive\Message\Text) {
                $text = $message->getText();
                if (strtolower(trim($text)) === "whoami") {
                    $fromMid = $message->getFromMid();
                    $user = $sdk->getUserProfile($fromMid);
                    $displayName = $user['contacts'][0]['displayName'];
 
                    $reply = "You are $displayName, and your mid is:\n\n$fromMid";
 
                    // Send the mid back to the sender and check if the message was delivered
                    $result = $sdk->sendText([$fromMid], $reply);
                    if(!$result instanceof LINE\LINEBot\Response\SucceededResponse) {
                        error_log('LINE error: ' . json_encode($result));
                    }
                } else {
                    // Process normally, or do nothing
                }
            } else {
                // Process other types of LINE messages like image, video, sticker, etc.
            }
        }
    } // Else, error
} else {
    error_log('LINE signatures didn\'t match: ' . $signature);
}
	$result =  json_encode($balas);
	//$result = ob_get_clean();
	file_put_contents('./balasan.json',$result);
	$client->replyMessage($balas);
