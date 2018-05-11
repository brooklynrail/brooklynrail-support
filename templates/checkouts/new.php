<?php $clientToken = $this->data["client_token"]; ?>
<html>
<?php require_once("includes/head.php"); ?>
<body>
<?php require_once("includes/header.php"); ?>

    <div class="wrapper">
        <div class="checkout">

            <form method="post" id="payment-form" action="/checkouts/">
                <section>
                    <label for="amount">
                        <span class="input-label">Amount</span>
                        <div class="input-wrapper amount-wrapper">
                            <input id="amount" name="amount" type="tel" min="1" placeholder="Amount" value="10">
                        </div>
                    </label>

                    <div class="bt-drop-in-wrapper">
                        <div id="bt-dropin"></div>
                    </div>
                </section>

                <input id="nonce" name="payment_method_nonce" type="hidden" />
                <button class="button" type="submit"><span>Submit</span></button>
            </form>
        </div>
    </div>
    

<?php require_once("includes/footer.php"); ?>


