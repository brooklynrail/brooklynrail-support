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

              <?php if (@ $transaction->paypal['payerEmail']) { ?>
                <p>PayPal: <?php echo($transaction->paypal['payerEmail'])?></p>
              <?php } ?>

              <?php if (@ $transaction->venmoAccount['username']) { ?>
                <p>Venmo: <?php echo($transaction->venmoAccount['username'])?></p>
              <?php } ?>

              <p>Amount: $<?php echo($transaction->amount)?></p>

              <hr/>
              <p>Thank you</p>
            </div>

          </div>
        </div>
        <!-- end Braintree -->

        <pre>
          <?php print_r('======================'); ?>
          <?php print_r($transaction); ?>
          <?php print_r('======================'); ?>
        </pre>

      </div>
    </div>

    <div class="row">
      <div class="col-sm-12 col-md-8">
        <a class="btn btn-lg btn-primary" href="https://brooklynrail.org/">Go to current issue</a>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-12 col-md-8">
        <div class="meta">
          <p>The <em>Brooklyn Rail</em> is a nonprofit 501(c)(3) organization. Your donation is fully deductible. Donations are non-refundable. Questions? Email us at <a href="mailto:store@brooklynrail.org?subject=Donation%20Question">store@brooklynrail.org</a></p>
          <p><a href="https://brooklynrail.org/contact" title="Contact the Rail">Contact Us</a> | <a title="Terms of Service" href="https://brooklynrail.org/terms-of-service">Terms of Service</a> | <a href="https://store.brooklynrail.org/store_web_pages/index/14" title="Privacy Policy">Privacy Policy</a></p>
        </div>
      </div>
    </div>

  </div>
</section>
