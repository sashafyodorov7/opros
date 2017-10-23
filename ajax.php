<?

$headers = "From: from@webhookservesite.ru";
​
 $message = print_r($_POST,true);
 @mail('a@fedorov.tech', 'Tilda TEST', $message, $headers);

echo"ok";

?>