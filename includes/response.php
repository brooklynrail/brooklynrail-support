<section id="donate" class="response">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-8">
        <!-- Start Braintree -->
        <h1><?php echo($header)?></h1>
        <p class="message"><?php echo($message)?></p>

        <div class="row">
          <div class="col-sm-12 col-md-7">
            <div class="receipt">
              <p><strong>The Brooklyn Rail</strong></p>
              <hr/>
              <p><?php echo($transaction->createdAt->format('F j, Y'))?> at <?php echo($transaction->createdAt->format('g:i a'))?></p>
              <p>Transaction id: <?php echo($transaction->id)?></p>

              <?php if (strpos(json_encode($transaction), 'customer')) { ?>
                <p>Name: <?php echo($transaction->customer['firstName']); ?> <?php echo($transaction->customer['lastName']); ?></p>
              <?php } ?>

              <?php if (strpos(json_encode($transaction), 'paypal')) { ?>
                <p>PayPal: <?php echo($transaction->paypal['payerEmail'])?></p>
              <?php } ?>

              <p>Amount: $<?php echo($transaction->amount)?></p>

              <hr/>
              <p>Thank you</p>
            </div>

            <?php //print_r('======================'); ?>
            <?php //print_r($transaction); ?>
            <?php //print_r('======================'); ?>

          </div>
        </div>
        <!-- end Braintree -->
      </div>
    </div>

    <div class="row">
      <div class="col-sm-12 col-md-8">
        <a class="btn btn-lg btn-primary" href="https://brooklynrail.org/">Go to current issue</a>
      </div>
    </div>

  </div>
</section>
