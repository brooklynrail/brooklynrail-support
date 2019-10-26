<?php

  $current_donations = '5550';
  $goal = '50000';
  $backers = '3';

  $percentChange = number_format(($current_donations / $goal) * 100, 0);
  $future = date_create("2019-12-31");
  $now = date_create(date("Y/m/d"));
  $diff = date_diff($future,$now);
  $days_left = $diff->format("%a");
?>

<section class="goals">

  <div class="progress-bar">
    <div class="progress" style="width:<?php echo $percentChange; ?>%"></div>
  </div>

  <p class="current_amt">$<?php echo number_format($current_donations); ?> <span>donated out of $<?php echo number_format($goal); ?></span></p>
  <p><?php echo $backers; ?> <span>donors</span></p>
  <p><?php echo $days_left; ?> <span>days remaining</span></p>

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
