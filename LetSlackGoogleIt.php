<?php
$INCOMING_WEBHOOK_URL = "https://hooks.slack.com/services/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";
$USERNAME = "Y U NO GOOGLE GOD DAMNIT?";
$ICON = ":troll:";
$text = $_POST['text'];
$channel_name = $_POST['channel_name'];
$curl = curl_init($INCOMING_WEBHOOK_URL);
curl_setopt($curl, CURLOPT_POST, true);
$response = "https://www.lmgtfy.com/?q=".rawurlencode($text);
$payload = array(
    'text' => rawurlencode($response),
    'username' => $USERNAME,
    'icon_emoji' => $ICON,
    'channel' => "#".$channel_name
);
$jsonPayload = "payload=".json_encode($payload);
curl_setopt($curl, CURLOPT_POSTFIELDS, $jsonPayload);
$return = curl_exec($curl);
curl_close($curl);
?>
