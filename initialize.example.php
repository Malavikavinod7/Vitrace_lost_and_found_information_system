<?php
/*
 * Example environment configuration file.
 * Copy this file to initialize.php and update values for your local setup.
 */

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'lfis');

define('base_url', 'http://localhost/Vitrace_lost_and_found_information_system/');
define('base_app', __DIR__ . '/');

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
