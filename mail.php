<?php
header('content-type: application/json; charset=utf-8');
header("access-control-allow-origin: *");

// ReCaptcha set up
$secret="6LfHB84UAAAAACwdUwV66zn_R12MONau7XxDcY9E";
$response=$_POST["captcha"];

$verify=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret={$secret}&response={$response}");
$captcha_success=json_decode($verify);


if ($captcha_success->success==false) {
  $data = array(
    "success" => false,
  );
  echo $_GET['callback'] . '('.json_encode($data).')';

}
else if ($captcha_success->success==true) {
  $data = array(
    "success" => true,
  );
  echo $_GET['callback'] . '('.json_encode($data).')';
}
