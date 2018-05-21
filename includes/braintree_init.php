<?php
session_start();

if(file_exists(__DIR__ . "/../../../.env-support")) {
    $dotenv = new Dotenv\Dotenv(__DIR__ . "/../../../", '.env-support');
    $dotenv->load();
}
