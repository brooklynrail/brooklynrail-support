<?php
header('content-type: application/json; charset=utf-8');
header("access-control-allow-origin: *");

$data = array(
  "donated" => 26429,
  "goal" => 50000,
  "backers" => 120,
);

echo $_GET['callback'] . '('.json_encode($data).')';

?>
