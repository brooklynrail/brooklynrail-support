<footer>
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="nav">

            <a href="/?=support">Current Issue</a>

            <a href="/about/?=support">About the Rail</a>

            <a href="https://store.brooklynrail.org/store/category/1?=support">Subscribe</a>

            <a href="/advertise/?=support">Advertise</a>

            <a href="/where-to-find-us/?=support">Find the Rail</a>

            <a href="https://www.instagram.com/brooklynrail/?hl=en?=support">Instagram</a>

        </div>
      </div>
    </div>
  </div>
</footer>

    <script
      src="https://code.jquery.com/jquery-3.3.1.min.js"
      integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
      crossorigin="anonymous"></script>
    <script type="text/javascript" src="assets/js/custom.js"></script>
    <script src="https://js.braintreegateway.com/web/dropin/1.10.0/js/dropin.min.js"></script>
    <script src="https://js.braintreegateway.com/web/3.34.0/js/client.min.js"></script>
    <script src="https://js.braintreegateway.com/web/3.34.0/js/venmo.min.js"></script>
    <script src="https://js.braintreegateway.com/web/3.34.0/js/data-collector.min.js"></script>
    <script>
      var form = document.querySelector('#payment-form');
      var submitButton = document.querySelector('#submit-button');
      var client_token = "<?php echo($client_token); ?>";

      braintree.dropin.create({
        authorization: client_token,
        container: '#bt-dropin',
        paypal: {
          flow: 'vault'
        },
        venmo: {}
      }, function (createErr, instance) {
        form.addEventListener('submit', function (event) {
          event.preventDefault();

          instance.requestPaymentMethod(function (err, payload) {
            if (err) {
              console.log('Error', err);
              submitButton.setAttribute('disabled', true);
              return;
            }
            // Add the nonce to the form and submit
            document.querySelector('#nonce').value = payload.nonce;
            form.submit();
          });

          // See documentation —
          // https://developers.braintreepayments.com/guides/drop-in/customization/javascript/v3#events
          // https://braintree.github.io/braintree-web-drop-in/docs/current/Dropin.html#event:paymentOptionSelected

          if (instance.isPaymentMethodRequestable()) {
            // This will be true if you generated the client token
            // with a customer ID and there is a saved payment method
            // available to tokenize with that customer.
            submitButton.removeAttribute('disabled');
          }

          instance.on('paymentMethodRequestable', function (event) {
            console.log(event.type); // The type of Payment Method, e.g 'CreditCard', 'PayPalAccount'.
            console.log(event.paymentMethodIsSelected); // True if a customer has selected a payment method when paymentMethodRequestable fires.

            // submitButton.removeAttribute('disabled');
            submitButton.setAttribute('disabled', true);
          });

          instance.on('noPaymentMethodRequestable', function () {
            console.log('nope');
            submitButton.setAttribute('disabled', true);
          });

        });
      });


      // Venmo =========================================
      // See: https://developers.braintreepayments.com/guides/venmo/client-side/javascript/v3#full-example

      var venmoButton = document.getElementById('venmo-button');

      // Create a client.
      braintree.client.create({
        authorization: client_token
      }, function (clientErr, clientInstance) {
        // Stop if there was a problem creating the client.
        // This could happen if there is a network error or if the authorization
        // is invalid.
        if (clientErr) {
          console.error('Error creating client:', clientErr);
          return;
        }


        braintree.dataCollector.create({
          client: clientInstance,
          paypal: true
        }, function (dataCollectorErr, dataCollectorInstance) {
          if (dataCollectorErr) {
            // Handle error in creation of data collector.
            return;
          }

          // At this point, you should access the deviceData value and provide it
          // to your server, e.g. by injecting it into your form as a hidden input.
          console.log('Got device data:', dataCollectorInstance.deviceData);
          document.getElementById('deviceData').value = dataCollectorInstance.deviceData;

        });

        braintree.venmo.create({
          client: clientInstance,
          // Add allowNewBrowserTab: false if your checkout page does not support
          // relaunching in a new tab when returning from the Venmo app. This can
          // be omitted otherwise.
          allowNewBrowserTab: false
        }, function (venmoErr, venmoInstance) {
          if (venmoErr) {
            console.error('Error creating Venmo:', venmoErr);
            return;
          }

          // Verify browser support before proceeding.
          if (!venmoInstance.isBrowserSupported()) {
            console.log('Browser does not support Venmo');
            return;
          }

          displayVenmoButton(venmoInstance);

          // Check if tokenization results already exist. This occurs when your
          // checkout page is relaunched in a new tab. This step can be omitted
          // if allowNewBrowserTab is false.
          if (venmoInstance.hasTokenizationResult()) {
            venmoInstance.tokenize(function (tokenizeErr, payload) {
              if (err) {
                handleVenmoError(tokenizeErr);
              } else {
                handleVenmoSuccess(payload);
              }
            });
            return;
          }
        });
      });

      function displayVenmoButton(venmoInstance) {
        // Assumes that venmoButton is initially display: none.
        venmoButton.style.display = 'block';

        venmoButton.addEventListener('click', function () {
          venmoButton.disabled = true;

          venmoInstance.tokenize(function (tokenizeErr, payload) {
            venmoButton.removeAttribute('disabled');

            if (tokenizeErr) {
              handleVenmoError(tokenizeErr);
            } else {
              handleVenmoSuccess(payload);
            }
          });
        });
      }

      function handleVenmoError(err) {
        if (err.code === 'VENMO_CANCELED') {
          console.log('App is not available or user aborted payment flow');
        } else if (err.code === 'VENMO_APP_CANCELED') {
          console.log('User canceled payment flow');
        } else {
          console.error('An error occurred:', err.message);
        }
      }

      function handleVenmoSuccess(payload) {
        // Send the payment method nonce to your server, e.g. by injecting
        // it into your form as a hidden input.
        console.log('Got a payment method nonce:', payload.nonce);
        // Display the Venmo username in your checkout UI.
        console.log('Venmo user:', payload.details.username);
      }
    </script>


    <!-- Google Analytics -->
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-24931975-1', 'auto');
      ga('send', 'pageview');

      /**
       * Function that tracks a click on an outbound link in Google Analytics.
       * This function takes a valid URL string as an argument, and uses that URL string
       * as the event label.
       * https://support.google.com/analytics/answer/1136920?hl=en
       */
      var trackOutboundLink = function(url) {
        ga('send', 'event', 'outbound_ad', 'click', url, {
          'hitCallback': function () { document.location = url;
        } });
      }
    </script>
