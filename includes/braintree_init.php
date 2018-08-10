<?php
session_start();

$dirname = basename(dirname(__DIR__, 1));


if ($_SERVER['HTTP_HOST'] === 'local.work:3000'){
  if(file_exists(__DIR__ . "/../.env")) {
    $dotenv = new Dotenv\Dotenv(__DIR__ . "/../", ".env");
    $dotenv->load();
  }
} else {
  if(file_exists(__DIR__ . "/../../../.env-$dirname")) {
    $dotenv = new Dotenv\Dotenv(__DIR__ . "/../../../", ".env-$dirname");
    $dotenv->load();
  }
}
