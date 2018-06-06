<header id="header" class="">
  <div class="container">

    <div class="row">
      <div class="col-sm-12">

        <h1 id="logo"><a href="/?=support" title="Support the Brooklyn Rail">
          <img src="https://brooklynrail.org/donate/assets/img/brooklynrail.png" alt="the Brooklyn Rail">
        </a></h1>

      </div>
    </div>

    <?php require_once("includes/nav.php"); ?>

    <?php if(isset($_SESSION["errors"])) : ?>
    <div class="row">
      <div class="col">
        <div class="alert alert-danger">
          <?php
          echo($_SESSION["errors"]);
          unset($_SESSION["errors"]);
          ?>
        </div>
      </div>
    </div>
    <?php endif; ?>

  </div>
</header>
