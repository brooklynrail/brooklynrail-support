<section id="donate">

  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-8">

        <!-- Start Braintree -->
        <div id="braintree">

          <form method="post" id="payment-form" action="/<?= $supportPath ?>">

            <div class="row">
              <div class="form-group col-sm-8">
                <label for="amount">
                  <span class="input-label">Give $10, $25, $50 +</span>
                  <div class="input-wrapper amount-wrapper">
                    <input id="amount" name="amount" type="tel" min="1" placeholder="Amount" value="25">
                  </div>
                </label>
              </div>
            </div>

            <div class="row">
              <div class="form-group col-sm-8">
                <label class="control-label" for="card-number">Card Number</label>
                <div id="card-number" class="form-control hosted-field"></div>
                <span class="helper-text"></span>
              </div>
            </div>

            <div class="form-row">
              <div class="form-group col-sm-4">
                <label class="control-label" for="cvv">CVV</label>
                <div id="cvv" class="form-control hosted-field"></div>
                <span class="helper-text"></span>
              </div>

              <div class="form-group col-sm-4">
                <label for="expiration-date">Expiration Date</label>
                <div id="expiration-date" class="form-control hosted-field"></div>
                <span class="helper-text"></span>
              </div>
            </div>


            <div class="form-row">
              <div class="form-group col-sm-4">
                <label for="postalCode">Zipcode</label>
                <div id="postalCode" class="form-control hosted-field"></div>
                <span class="helper-text"></span>
              </div>
            </div>

            <div class="form-row">
              <div class="form-group col-sm-8">
                <label for="email">Email</label>
                <div id="email" class="form-control hosted-field"></div>
                <span class="helper-text"></span>
              </div>
            </div>

            <div class="form-row">
              <div class="form-group col-sm-8">
                <input id="submit-button" class="button btn btn-primary btn-lg" type="submit" value="Pay" disabled />
              </div>
            </div>

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
                    'font-size': '16px'
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
                    placeholder: '11/2020'
                  },
                  postalCode: {
                    selector: '#postalCode',
                    placeholder: '10014'
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

        </div> <!-- end Braintree -->

      </div>
    </div>
  </div>
</section>
