<?php
header('content-type: application/json; charset=utf-8');
header("access-control-allow-origin: *");

// Amount donated
$donated = '66248';

// Backers / Donors
$backers = '209';

// Goal
$goal = '50000';

$percentChange = number_format(($donated / $goal) * 100, 0);
$future = date_create("2019-12-31");
$now = date_create(date("Y/m/d"));
$diff = date_diff($future,$now);
$days_left = $diff->format("%a") + 1;

$data = array(
  "donated" => $donated,
  "goal" => $goal,
  "backers" => $backers,
  "percentChange" => $percentChange,
  "days_left" => $days_left,
);

echo $_GET['callback'] . '('.json_encode($data).')';

?>
