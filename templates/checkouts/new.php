<?php $clientToken = $this->data["client_token"];
$supportPath = $this->data["support_path"];

?>
<html>
<?php require_once("includes/head.php"); ?>
<body>
<?php require_once("includes/header.php"); ?>

<?php require_once("includes/content.php"); ?>

<?php //require_once("includes/braintree-dropin-form.php"); ?>
<?php require_once("includes/braintree-client-form.php"); ?>

<?php require_once("includes/newsletter.php"); ?>

<?php require_once("includes/footer.php"); ?>

</body>
</html>
