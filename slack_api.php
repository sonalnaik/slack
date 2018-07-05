<?php
//function slack($message, $channel)
//{
//    echo "entry point";
//    $ch = curl_init("https://slack.com/api/chat.postMessage");
//    $data = http_build_query([
//        "token" => "xoxp-371311800914-372359176279-372207525174-d7dcfed1713c4f1aed50a1731f411aac",
//    	"channel" => $channel, //"#mychannel",
//    	"text" => $message, //"Hello, Foo-Bar channel message.",
//    	"username" => "testrth1"
//    ]);
//    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
//    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
//    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
//    $result = curl_exec($ch);
//    curl_close($ch);
//    
//    return $result;
//}
//// Example message will post "Hello world" into the random channel
//$result=slack('from api','#mychannel');
//print_r($result);



  // Create a constant to store your Slack URL
  //phpinfo();
#*************for reference:-https://tosbourn.com/posting-to-slack-with-php/*****************
#for getting credentials of webhook:-https://testprojectsonal.slack.com/services/BBJL0UWV7?added=1


  define('SLACK_WEBHOOK', 'https://hooks.slack.com/services/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');
  // Make your message
  $message = array('payload' => json_encode(array('text' => 'My Second API Message')));
  // Use curl to send your message
  $c = curl_init(SLACK_WEBHOOK);
  curl_setopt($c, CURLOPT_SSL_VERIFYPEER, false);
  curl_setopt($c, CURLOPT_POST, true);
  curl_setopt($c, CURLOPT_POSTFIELDS, $message);
  $result =curl_exec($c);
  curl_close($c);
  echo "result->";print_r($result);


?>
