<?php
    $dsn = 'mysql:host=https://web.njit.edu/mysql/phpMyAdmin;dbname=sd655';
    $username = 'sd655';
    $password = 'pSLU9F3d';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('database_error.php');
        exit();
    }
?>