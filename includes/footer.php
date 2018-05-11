      </div>
    </div>
  </div>
</section>

<section id="newsletter">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-7">
        <img class="cover" src="https://brooklynrail.org/content/issue/cover_image/177/cover-ruppersberg.jpg" alt="">
        <h4>Sign-up for our newsletter</h4>
        <p>Be Cool. Be Informed. Be Present.</p>
        <p>Stay up to date with events and special releases between our monthly issues.</p>
      </div>
      <div class="col-sm-12 col-md-5">
        <!-- Begin MailChimp Signup Form -->
        <div id="mc_embed_signup">
          <form action="https://brooklynrail.us1.list-manage.com/subscribe/post?u=dfcd810ee6ea33002746a0f47&amp;id=a44895fefe" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
            <div id="mc_embed_signup_scroll">
              <div class="mc-field-group form-group">
              	<label for="mce-EMAIL">Email Address  <span class="asterisk">*</span></label>
              	<input type="email" value="" name="EMAIL" class="form-control required email" id="mce-EMAIL">
              </div>
              <div class="mc-field-group form-group">
              	<label for="mce-FNAME">First Name </label>
              	<input type="text" value="" name="FNAME" class="form-control" id="mce-FNAME">
              </div>
              <div class="mc-field-group form-group">
              	<label for="mce-LNAME">Last Name </label>
              	<input type="text" value="" name="LNAME" class="form-control" id="mce-LNAME">
              </div>
            	<div id="mce-responses" class="clear">
            		<div class="response" id="mce-error-response" style="display:none"></div>
            		<div class="response" id="mce-success-response" style="display:none"></div>
            	</div>
              <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
              <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_dfcd810ee6ea33002746a0f47_a44895fefe" tabindex="-1" value=""></div>
              <div class="clear">
                <input class="btn btn-primary" type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">
              </div>
            </div>
          </form>
        </div>
        <!--End mc_embed_signup-->

      </div>
    </div>
  </div>
</section>



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

    </div>

  </body>

</html>
