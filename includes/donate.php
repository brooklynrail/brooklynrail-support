<section id="donate">
  <!-- Start Braintree -->
  <!-- Support path = <?= $supportPath ?> -->
  <div class="wrapper">
    <div class="checkout">
      <form method="post" id="payment-form" action="<?= $supportPath ?>">
        <p class="label">Your donation</p>
        <label id="amount-field" for="amount">
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">$</span>
            </div>
            <input id="amount" name="amount" type="text" class="form-control form-control-lg" aria-label="Amount (to the nearest dollar)" value="50">
            <p class="gift"></p>
          </div>
        </label>

        <section class="braintree-payments">
          <div class="bt-drop-in-wrapper">
            <div id="bt-dropin"></div>
          </div>
        </section>


        <section id="email-receipt">

          <script type="text/javascript" src="assets/js/validate.js"></script>
          
          <input id="donation_type" class="form-control" name="donation_type" type="hidden" value="fundraiser-2019" />

          <div class="grid-row grid-gap-2">
            <div class="grid-col-6">
              <label class="usa-label" for="first_name">First name <span class="required">Required</span></label>
              <input autocomplete="off" class="usa-input" id="first_name" name="first_name" type="text" required aria-required="true" onkeyup="validatename(this.value, 'first_name')">
            </div>
            <div class="grid-col-6">
              <label class="usa-label" for="last_name">Last name <span class="required">Required</span></label>
              <input autocomplete="off" class="usa-input" id="last_name" name="last_name" type="text" required aria-required="true" onkeyup="validatename(this.value, 'last_name')">
            </div>
          </div>

          <label class="usa-label" for="email">Email Address <span class="required">Required</span></label>
          <input autocomplete="off" class="usa-input" id="email" name="email" type="text" required aria-required="true" onkeyup="validatemail(this.value)">

        </section>

        <input id="deviceData" name="deviceData" type="hidden" />

        <!-- reCAPTCHA -->
        <div class="g-recaptcha" data-sitekey="6LfHB84UAAAAALipt_TJ4FKP9wkB3P-ptF7TORUD" data-callback="recaptchaCallback"></div>

        <input id="nonce" name="payment_method_nonce" type="hidden" />

        <!-- Submit -->
        <button id="submit-button" class="button btn btn-primary btn-lg" type="submit" disabled><span>Pay</span></button>

        <div id="loader-box">
          <div class="loader">Loading...</div>
        </div>

      </form>

      <div class="meta">
        <p>The <em>Brooklyn Rail</em> is a nonprofit 501(c)(3) organization. Your donation is fully deductible. Donations are non-refundable. Questions? Email us at <a href="mailto:hq@brooklynrail.org?subject=Donation%20Question">hq@brooklynrail.org</a></p>
        <p><a href="https://brooklynrail.org/contact" title="Contact the Rail">Contact Us</a> | <a title="Terms of Service" href="https://brooklynrail.org/terms-of-service">Terms of Service</a> | <a href="https://store.brooklynrail.org/store_web_pages/index/14" title="Privacy Policy">Privacy Policy</a></p>
      </div>

    </div>
  </div>
  <!-- end Braintree -->
</section>
