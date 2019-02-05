<?php
session_start();

$dirname = basename(dirname(__DIR__, 1));

if ($_SERVER['HTTP_HOST'] === 'localhost:8000'){
  if(file_exists(__DIR__ . "/../.env-support-beta")) {
    $dotenv = new Dotenv\Dotenv(__DIR__ . "/../", ".env-support-beta");
    $dotenv->load();
  }
} else {
  if(file_exists(__DIR__ . "/../../../.env-$dirname")) {
    $dotenv = new Dotenv\Dotenv(__DIR__ . "/../../../", ".env-$dirname");
    $dotenv->load();
  }
}
