<?php
header('content-type: application/json; charset=utf-8');
header("access-control-allow-origin: *");

$data = array(
  "donated" => 23322,
  "goal" => 50000,
  "backers" => 107,
);

echo $_GET['callback'] . '('.json_encode($data).')';

?>
