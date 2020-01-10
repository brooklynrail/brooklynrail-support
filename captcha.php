<?php
// ReCaptcha set up
$secret="6LfHB84UAAAAACwdUwV66zn_R12MONau7XxDcY9E";
$response=$_POST["captcha"];

$url = "https://www.google.com/recaptcha/api/siteverify?secret={$secret}&response={$response}";
curl_setopt($ch=curl_init(), CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$verify = curl_exec($ch);
curl_close($ch);

$captcha_success=json_decode($verify);

$error = array(
  "error" => true,
);

if ($captcha_success->success==false) {
  echo $_GET['callback'] . '('.json_encode($error).')';
}
else if ($captcha_success->success==true) {
  echo $_GET['callback'] . '('.json_encode($captcha_success).')';
}
