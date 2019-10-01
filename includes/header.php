<header id="header" class="">
  <div class="container">

    <div class="row">
      <div class="col-sm-12">

        <h1 id="logo">
          <a href="/?=support" title="Support the Brooklyn Rail">
            <img src="https://venice.brooklynrail.org/assets/img/brooklyn-rail-logo-2019-outline-red.svg" alt="The Brooklyn Rail Logo">
          </a>
        </h1>

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
