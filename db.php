<?php 

    $DB_NAME = "php_cheva";
    $DB_USERNAME = "root";
    $DB_PASSWORD = "";
    $DB_HOST = "127.0.0.1";
    $DB_PORT = 3306;

    $connection = mysqli_connect($DB_HOST, $DB_USERNAME, $DB_PASSWORD, $DB_NAME, $DB_PORT);

    if (mysqli_errno($connection)) {
        echo "Error ". mysqli_error($connection);
    }
