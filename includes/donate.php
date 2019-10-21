<section id="donate">
  <!-- Start Braintree -->
  <div class="wrapper">
    <div class="checkout">
      <form method="post" id="payment-form" action="/<?= $supportPath ?>">
        <section class="amt-select">
          <p class="label">Select a donation amount</p>
          <div class="group">
            <button type="button" title="Donate $5" data-amt="5"><strong>$5</strong></button>
            <button type="button" title="Donate $25" data-amt="25"><strong>$25</strong></button>
            <button type="button" title="Donate $50" data-amt="50"class="btn btn-outline-primary btn-lg active"><strong>$50</strong></button>
            <button type="button" title="Donate $100" data-amt="100"><strong>$100</strong></button>
            <button type="button" title="Donate $250" data-amt="250"><strong>$250</strong></button>
          </div>
          <div class="group">
            <button type="button" title="Donate $500" data-amt="500"><strong>$500</strong></button>
            <button type="button" title="Donate $1,000" data-amt="1000"><strong>$1,000</strong></button>
          </div>

          <label id="amount-field" for="amount">
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text">$</span>
              </div>
              <input id="amount" name="amount" type="text" class="form-control form-control-lg" aria-label="Amount (to the nearest dollar)" value="50">
              <p class="gift"></p>
            </div>

          </label>
        </section>


        <section class="braintree-payments">
          <div class="bt-drop-in-wrapper">
            <div id="bt-dropin"></div>
          </div>
        </section>


        <section id="email-receipt">
          <script type="text/javascript">
            var checks = {
              'email': false,
              'first_name': false,
              'last_name': false
            }
            // is full form valid
            function isValid(){
              for(var i in checks){
                if(!checks[i]){
                  $('#submit-button').prop('disabled', true);
                  return false;
                }
              }
              $('#submit-button').removeAttr('disabled');
              return true;
            }
            // Validate Email
            function validatemail(mail) {
              var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
              if (mail.match(mailformat)) {
                $('email').addClass('is-valid').focus();
                checks['email'] = true;
                isValid();
                return true;
              } else {
                checks['email'] = false;
                $('email').addClass('is-invalid').focus();
                $('#submit-button').prop('disabled', true);
                return false;
              }
            }
            function validatename(name, class_name) {
              if (name.length !== 0) {
                $(class_name).addClass('is-valid').focus();
                checks[class_name] = true;
                isValid();
                return true;
              } else {
                checks[class_name] = false;
                $(class_name).addClass('is-invalid').focus();
                $('#submit-button').prop('disabled', true);
                return false;
              }
            }
          </script>

          <input id="donation_type" class="form-control" name="donation_type" type="hidden" value="fundraiser-2019" />

          <div class="grid-row grid-gap-2">
            <div class="grid-col-6">
              <label class="usa-label" for="first_name">First name <span class="required">Required</span></label>
              <input class="usa-input" id="first_name" name="first_name" type="text" required aria-required="true" onkeyup="validatename(this.value, 'first_name')">
            </div>
            <div class="grid-col-6">
              <label class="usa-label" for="last_name">Last name <span class="required">Required</span></label>
              <input class="usa-input" id="last_name" name="last_name" type="text" required aria-required="true" onkeyup="validatename(this.value, 'last_name')">
            </div>
          </div>



          <label class="usa-label" for="email">Email Address <span class="required">Required</span></label>
          <input class="usa-input" id="email" name="email" type="text" required aria-required="true" onkeyup="validatemail(this.value)">

        </section>

        <input id="deviceData" name="deviceData" type="hidden" />

        <input id="nonce" name="payment_method_nonce" type="hidden" />
        <button id="submit-button" class="button btn btn-primary btn-lg" type="submit" disabled><span>Pay</span></button>

        <div id="loader-box">
          <div class="loader">Loading...</div>
        </div>

      </form>

      <div class="meta">
        <p>The <em>Brooklyn Rail</em> is a nonprofit 501(c)(3) organization. Your donation is fully deductible. Donations are non-refundable. Questions? Email us at <a href="mailto:store@brooklynrail.org?subject=Donation%20Question">store@brooklynrail.org</a></p>
        <p><a href="https://brooklynrail.org/contact" title="Contact the Rail">Contact Us</a> | <a title="Terms of Service" href="https://brooklynrail.org/terms-of-service">Terms of Service</a> | <a href="https://store.brooklynrail.org/store_web_pages/index/14" title="Privacy Policy">Privacy Policy</a></p>
      </div>

    </div>
  </div>
  <!-- end Braintree -->
</section>
