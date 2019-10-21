<?php
  $current_amt = '10150';
  $total_amt = '50000';
  $backers = '22';
  $percentChange = number_format(($current_amt / $total_amt) * 100, 0);
?>

<section class="goals">

  <div class="progress-bar">
    <div class="progress" style="width:<?php echo $percentChange; ?>%"></div>
  </div>

  <p class="current_amt">$<?php echo number_format($current_amt); ?> <span>donated out of $<?php echo number_format($total_amt); ?></span></p>
  <p><?php echo $backers; ?> <span>donors</span></p>

</section>
