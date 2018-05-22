<?php $transaction = $this->data["transaction"]; ?>
<html>
<?php require_once("includes/head.php"); ?>
<body>
<?php require_once("includes/header.php"); ?>

<section id="donate">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <!-- Start Braintree -->
        <div class="wrapper">
          <div class="response">
            <div class="content">
              <div class="icon">
                <img src="static/images/<?php echo($icon)?>.svg" alt="">
              </div>

              <h1><?php echo($header)?></h1>
              <section>
                <p><?php echo($message)?></p>
              </section>

            </div>
          </div>
        </div>
        <!-- end Braintree -->
      </div>
    </div>
  </div>
</section>

<?php require_once("includes/newsletter.php"); ?>
<?php require_once("includes/footer.php"); ?>

</body>
</html>
