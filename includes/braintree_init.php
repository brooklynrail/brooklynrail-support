<?php
session_start();

$dirname = basename(dirname(__DIR__));
print_r($dirname);
echo "<br/>";
print_r(__DIR__);
echo "<br/>";
if ($_SERVER['HTTP_HOST'] === 'localhost:3000'){
  if(file_exists(__DIR__ . "/../.env-support-beta")) {
    $dotenv = new Dotenv\Dotenv(__DIR__ . "/../", ".env-support-beta");
    $dotenv->load();
  }
} else {
  if(file_exists(__DIR__ . "/../.env-donate")) {
    echo "yes";
    die();
    // $dotenv = new Dotenv\Dotenv(__DIR__ . "/../", ".env-donate");
    // $dotenv->load();
  }
}
