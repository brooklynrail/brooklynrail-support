<section id="donate" class="response">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-8">
        <!-- Start Braintree -->
        <h1><?php echo($header)?></h1>
        <p class="message"><?php echo($message)?></p>

        <div class="row">
          <div class="col-sm-12 col-md-6">
            <div class="receipt">
              <p><strong>The Brooklyn Rail</strong></p>
              <hr/>
              <p><?php echo($transaction->createdAt->format('F j, Y'))?> at <?php echo($transaction->createdAt->format('g:i a'))?></p>
              <p>Transaction id: <?php echo($transaction->id)?></p>
              <p class="hide">Name: [ <?php echo($transaction->customer->firstName)?> <?php echo($transaction->customer->lastName)?> ]</p>
              <p>Amount: $<?php echo($transaction->amount)?></p>
              <hr/>
              <p>Thank you</p>
            </div>
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
