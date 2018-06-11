<section id="donate">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-8">

        <!-- Start Braintree -->
        <div class="wrapper">
          <div class="checkout">

            <!-- Braintree form -->
            <form method="post" id="payment-form" action="/<?= $supportPath ?>">

              <section>
                <label for="amount">
                  <span class="input-label">Give $10, $25, $50 +</span>
                  <div class="input-wrapper amount-wrapper">
                    <input id="amount" name="amount" type="tel" min="1" placeholder="Amount" value="25">
                  </div>
                </label>

                <div class="form-group">
                  <label for="card-number">Card Number</label>
                  <div id="card-number" class="form-control hosted-field"></div>
                </div>

                <div class="form-group">
                  <label for="cvv">CVV</label>
                  <div id="cvv" class="form-control hosted-field"></div>
                </div>

                <div class="form-group">
                  <label for="expiration-date">Expiration Date</label>
                  <div id="expiration-date" class="form-control hosted-field"></div>
                </div>

                <div class="form-group">
                  <label for="email">Email</label>
                  <div id="email" class="form-control hosted-field"></div>
                </div>

                <input id="submit-button" class="button btn btn-primary btn-lg" type="submit" value="Pay" />

              </section>

              <input id="deviceData" name="deviceData" type="hidden" />
              <input id="nonce" name="payment_method_nonce" type="hidden" />

              <div id="loader-box">
                <div class="loader">Loading...</div>
              </div>

            </form>

            <script src="https://js.braintreegateway.com/web/3.34.0/js/client.min.js"></script>
            <script src="https://js.braintreegateway.com/web/3.34.0/js/hosted-fields.min.js"></script>
            <script>
              var form = document.querySelector('#payment-form');
              var submit = document.querySelector('#submit-button');
              var client_token = "<?php echo($client_token); ?>";

              braintree.client.create({
                authorization: client_token
              }, function (clientErr, clientInstance) {
                if (clientErr) {
                  console.error(clientErr);
                  return;
                }

                // This example shows Hosted Fields, but you can also use this
                // client instance to create additional components here, such as
                // PayPal or Data Collector.

                braintree.hostedFields.create({
                  client: clientInstance,
                  styles: {
                    'input': {
                      'font-size': '14px'
                    },
                    'input.invalid': {
                      'color': 'red'
                    },
                    'input.valid': {
                      'color': 'green'
                    }
                  },
                  fields: {
                    number: {
                      selector: '#card-number',
                      placeholder: '4111 1111 1111 1111'
                    },
                    cvv: {
                      selector: '#cvv',
                      placeholder: '123'
                    },
                    expirationDate: {
                      selector: '#expiration-date',
                      placeholder: '10/2019'
                    }
                  }
                }, function (hostedFieldsErr, hostedFieldsInstance) {
                  if (hostedFieldsErr) {
                    console.error(hostedFieldsErr);
                    return;
                  }

                  submit.removeAttribute('disabled');

                  form.addEventListener('submit', function (event) {
                    event.preventDefault();

                    hostedFieldsInstance.tokenize(function (tokenizeErr, payload) {
                      if (tokenizeErr) {
                        console.error(tokenizeErr);
                        return;
                      }

                      // If this was a real integration, this is where you would
                      // send the nonce to your server.
                      console.log('Got a nonce: ' + payload.nonce);
                    });
                  }, false);
                });
              });
            </script>


            <div class="meta">
              <p>The <em>Brooklyn Rail</em> is a nonprofit 501(c)(3) organization. Your donation is fully deductible. Donations are non-refundable. Questions? Email us at <a href="mailto:store@brooklynrail.org?subject=Donation%20Question">store@brooklynrail.org</a></p>
              <p><a href="https://brooklynrail.org/contact" title="Contact the Rail">Contact Us</a> | <a title="Terms of Service" href="https://brooklynrail.org/terms-of-service">Terms of Service</a> | <a href="https://store.brooklynrail.org/store_web_pages/index/14" title="Privacy Policy">Privacy Policy</a></p>
            </div>

          </div>
        </div>
        <!-- end Braintree -->
      </div>
    </div>
  </div>
</section>
