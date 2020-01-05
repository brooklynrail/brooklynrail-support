<?php $clientToken = $this->data["client_token"];
$supportPath = $this->data["support_path"];

?>
<html>
<?php require_once("includes/head.php"); ?>

<body>
  <div class="paper">

    <?php require_once("includes/header.php"); ?>

    <main>

      <?php require_once("includes/header-thanks.php"); ?>

      <section class="page-top">
        <div class="grid-container grid-container-desktop-lg">
          <div class="grid-row grid-gap-4">
            <div class="grid-col-12 tablet-lg:grid-col-8 tablet-lg:grid-offset-2">
              <div class="video-container">
                <iframe width="650" height="365" src="https://www.youtube.com/embed/QeNzahu3ooE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section>
        <div class="grid-container grid-container-desktop-lg">
          <div class="grid-row grid-gap-4">
            <div class="grid-col-12 tablet-lg:grid-col-8 tablet-lg:grid-offset-2">
              <div class="page-content">
                <?php require_once("includes/content.php"); ?>
              </div>
            </div>
          </div>
        </div>
      </section>

    </main>

    <?php require_once("includes/footer.php"); ?>
    <?php require_once("includes/scripts.php"); ?>

  </div>
</body>

</html>
