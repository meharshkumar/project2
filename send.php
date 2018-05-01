<?php
$mobile="8959177684";
$message="test message";
$json = json_decode(file_get_contents("https://smsapi.engineeringtgr.com/send/?Mobile=xxxxxxxxxx&Password=xxxxxx&Message=".urlencode($message)."&To=".urlencode($mobile)."&Key=xxxxxxxxxxxxxx"),true);
if ($json["status"]==="success") {
    echo $json["msg"];
    //your code when send success
}else{
    echo $json["msg"];
    //your code when not send
}
?>
 