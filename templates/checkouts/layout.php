<?php $clientToken = $this->data["client_token"];
$supportPath = $this->data["support_path"];

?>
<html>
<?php require_once("includes/head.php"); ?>

<body>
  <div class="paper">

    <?php require_once("includes/header.php"); ?>

    <main>
      <section class="lead">
        <div class="grid-container grid-container-desktop-lg">
          <div class="grid-row">
            <div class="grid-col-12">
              <div class="usa-prose">
                <p>We aim to raise $<span>50,000</span> by <span>December 31st</span> to <strong>keep the <em>Rail</em> independent and free.</strong></p>

                <p>For over 19 years, individual donations from artists, writers, friends, and patrons have been integral to our independence.</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="page-top">
        <div class="grid-container grid-container-desktop-lg">
          <div class="grid-row grid-gap-4">
            <div class="grid-col-12 tablet-lg:grid-col-7">
              <div class="video-container">
                <iframe width="650" height="365" src="https://www.youtube.com/embed/QeNzahu3ooE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div>
            </div>
            <div class="grid-col-12 tablet-lg:grid-col-5">
              <?php require_once("includes/goals.php"); ?>
            </div>
          </div>
        </div>
      </section>
      <section>
        <div class="grid-container grid-container-desktop-lg">
          <div class="grid-row">
            <div class="grid-col-12">
              <div class="page-content">
                <div class="grid-row grid-gap-4">
                  <div class="grid-col-12 tablet-lg:grid-col-5 tablet-lg:order-2">
                    <?php require_once("includes/donate.php"); ?>
                  </div>
                  <div class="grid-col-12 tablet-lg:grid-col-7 tablet-lg:order-first">
                    <?php require_once("includes/content.php"); ?>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>

    <?php require_once("includes/newsletter.php"); ?>
    <?php require_once("includes/footer.php"); ?>
    <?php require_once("includes/scripts.php"); ?>

  </div>
</body>

</html>
