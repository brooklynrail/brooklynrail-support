<?php
header('content-type: application/json; charset=utf-8');
header("access-control-allow-origin: *");

$data = array(
  "donated" => 27644,
  "goal" => 50000,
  "backers" => 127,
);

echo $_GET['callback'] . '('.json_encode($data).')';

?>
