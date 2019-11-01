<?php
session_start();

$dirname = basename(dirname(__DIR__));
print_r($dirname);

if ($_SERVER['HTTP_HOST'] === 'localhost:3000'){
  if(file_exists(__DIR__ . "/../.env-support-beta")) {
    $dotenv = new Dotenv\Dotenv(__DIR__ . "/../", ".env-support-beta");
    $dotenv->load();
  }
} else {
  if(file_exists(__DIR__ . "../.env-donate")) {
    print_r('yes');
    print_r(__DIR__);
    print_r('|  | ');
    print_r(__DIR__ . "/../../../");
    $dotenv = new Dotenv\Dotenv(__DIR__ . "/../../../", ".env-donate");
    $dotenv->load();
  }
}
