<?php
header('content-type: application/json; charset=utf-8');
header("access-control-allow-origin: *");

$data = array(
  "donated" => 18222,
  "goal" => 50000,
  "backers" => 55,
);

echo $_GET['callback'] . '('.json_encode($data).')';

?>
