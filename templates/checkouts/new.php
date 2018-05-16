<?php $clientToken = $this->data["client_token"]; ?>
<html>
<?php require_once("includes/head.php"); ?>
<body>
<?php require_once("includes/header.php"); ?>

<section id="donate">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-8">

        <!-- Start Braintree -->
        <div class="wrapper">
          <div class="checkout">
            <form method="post" id="payment-form" action="/">
              <section>
                <label for="amount">
                  <span class="input-label">I can give $10, $25, $50 +</span>
                  <div class="input-wrapper amount-wrapper">
                    <input id="amount" name="amount" type="tel" min="1" placeholder="Amount" value="$25">
                  </div>
                </label>

                <div class="bt-drop-in-wrapper">
                  <div id="bt-dropin"></div>
                </div>
              </section>

              <input id="nonce" name="payment_method_nonce" type="hidden" />
              <button class="button btn btn-primary" type="submit"><span>Submit</span></button>
            </form>
          </div>
        </div>
        <!-- end Braintree -->
      </div>
    </div>
  </div>
</section>

<?php require_once("includes/newsletter.php"); ?>

<?php require_once("includes/footer.php"); ?>

</body>
</html>
