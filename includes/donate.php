<section id="donate">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-8">

        <!-- Start Braintree -->
        <div class="wrapper">
          <div class="checkout">
            <form method="post" id="payment-form" action="/<?= $supportPath ?>">
              <section>
                <label for="amount">
                  <span class="input-label">Give $10, $25, $50 +</span>
                  <div class="input-wrapper amount-wrapper">
                    <input id="amount" name="amount" type="tel" min="1" placeholder="Amount" value="25">
                  </div>
                </label>

                <div class="bt-drop-in-wrapper">
                  <div id="bt-dropin"></div>
                </div>
              </section>

              <div id="email-receipt" class="row">
                <div class="col-sm-12 col-md-8">
                  <label for="">Email Address</label>
                  <input id="email" class="form-control" placeholder="example@brooklynrail.org" name="email" type="email" />
                  <span>Required</span>
                </div>
              </div>



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
      </div>
    </div>
  </div>
</section>
