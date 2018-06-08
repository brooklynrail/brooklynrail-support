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

              <input id="deviceData" name="deviceData" type="hidden" />

              <input id="nonce" name="payment_method_nonce" type="hidden" />
              <button id="submit-button" class="button btn btn-primary btn-lg" type="submit"><span>Pay</span></button>

              <p class="tos"><a title="Terms of Service" href="https://brooklynrail.org/terms-of-service">Terms of Service</a> | <a href="https://store.brooklynrail.org/store_web_pages/index/14" title="Privacy Policy">Privacy Policy</a>
            </form>
          </div>
        </div>
        <!-- end Braintree -->
      </div>
    </div>
  </div>
</section>
