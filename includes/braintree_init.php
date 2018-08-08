<?php
session_start();

// $dirname = basename(dirname(__DIR__, 1));
// echo $dirname;

if(file_exists(__DIR__ . "/../.env")) {
    $dotenv = new Dotenv\Dotenv(__DIR__ . "/..");
    $dotenv->load();
}
