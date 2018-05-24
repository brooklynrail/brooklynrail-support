<?php
session_start();

$dirname = basename(dirname(__DIR__, 1));

if(file_exists(__DIR__ . "/../../../.env-$dirname")) {
    $dotenv = new Dotenv\Dotenv(__DIR__ . "/../../../", ".env-$dirname");
    $dotenv->load();
}
