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
    <script>
      var form = document.querySelector('#payment-form');
      var client_token = "<?php echo($client_token); ?>";

      braintree.dropin.create({
        authorization: client_token,
        container: '#bt-dropin',
        paypal: {
          flow: 'vault'
        }
      }, function (createErr, instance) {
        form.addEventListener('submit', function (event) {
          event.preventDefault();

          instance.requestPaymentMethod(function (err, payload) {
            if (err) {
              console.log('Error', err);
              return;
            }

            // Add the nonce to the form and submit
            document.querySelector('#nonce').value = payload.nonce;
            form.submit();
          });
        });
      });
    </script>
