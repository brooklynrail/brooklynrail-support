<header>
  <div class="grid-container">
    <div class="grid-row">
      <div class="grid-col-12">
        <div id="header">
          <h1>
            <a href="/?=support" title="Support the Brooklyn Rail">
              <img src="assets/img/brooklyn-rail-logo-2019-outline-red.svg" alt="The Brooklyn Rail Logo">
            </a>
          </h1>
        </div>
      </div>
    </div>

    <?php require_once("includes/nav.php"); ?>

    <?php if(isset($_SESSION["errors"])) : ?>
    <div class="grid-row">
      <div class="grid-col-12">
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
