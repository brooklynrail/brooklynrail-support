<?php $clientToken = $this->data["client_token"];
$supportPath = $this->data["support_path"];

?>
<html>
<?php require_once("includes/head.php"); ?>

<body>
  <div class="paper">

    <?php require_once("includes/header.php"); ?>

    <main>
      <div class="grid-container grid-container-desktop-lg">
        <div class="grid-row grid-gap-4">
          <div class="grid-col-12 tablet-lg:grid-col-7">
            <?php require_once("includes/content.php"); ?>
          </div>
          <div class="grid-col-12 tablet-lg:grid-col-5">
            <?php require_once("includes/goals.php"); ?>
            <?php require_once("includes/donate.php"); ?>
          </div>
        </div>
      </div>
    </main>

    <?php require_once("includes/newsletter.php"); ?>
    <?php require_once("includes/footer.php"); ?>
    <?php require_once("includes/scripts.php"); ?>

  </div>
</body>

</html>
