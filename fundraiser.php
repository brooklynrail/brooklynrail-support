<?php
header('content-type: application/json; charset=utf-8');
header("access-control-allow-origin: *");

$data = array(
  "donated" => 14002,
  "goal" => 50000,
  "backers" => 36,
);

echo $_GET['callback'] . '('.json_encode($data).')';

?>
