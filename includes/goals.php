<?php

  function get_JSONP($url){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($ch);
    curl_close($ch);
    return $output;
  }
  function jsonp_decode($jsonp, $assoc = false) { // PHP 5.3 adds depth as third parameter to json_decode
    if($jsonp[0] !== '[' && $jsonp[0] !== '{') {
        $jsonp = substr($jsonp, strpos($jsonp, '('));
    }
    $jsonp = trim($jsonp);      // remove trailing newlines
    $jsonp = trim($jsonp,'()'); // remove leading and trailing parenthesis
    return json_decode($jsonp);
  }

  $json_url = 'https://donate.brooklynrail.org/fundraiser.php?callback=progress';
  $jsonp = get_JSONP($json_url);
  $goal_data = jsonp_decode($jsonp);
  $donated = $goal_data->donated;
  $goal = $goal_data->goal;
  $backers = $goal_data->backers;

  $percentChange = number_format(($donated / $goal) * 100, 0);
  $future = date_create("2019-12-31");
  $now = date_create(date("Y/m/d"));
  $diff = date_diff($future,$now);
  $days_left = $diff->format("%a") + 1;
?>

<section class="goals">

  

  <section class="amt-select">
    <p class="label">Select a donation amount</p>
    <div class="group">
      <button type="button" title="Donate $5" data-amt="5"><strong>$5</strong></button>
      <button type="button" title="Donate $25" data-amt="25"><strong>$25</strong></button>
      <button type="button" title="Donate $50" data-amt="50"class="btn btn-outline-primary btn-lg active"><strong>$50</strong></button>
      <button type="button" title="Donate $100" data-amt="100"><strong>$100</strong></button>
      <button type="button" title="Donate $250" data-amt="250"><strong>$250</strong></button>
      <button type="button" title="Donate $500" data-amt="500"><strong>$500</strong></button>
      <button type="button" title="Donate $1,000" data-amt="1000"><strong>$1,000</strong></button>
    </div>
  </section>

</section>
