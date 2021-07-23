<?php
// lib/functions.php

function get_connection()
{
    require 'config.php';
    $pdo = new PDO(
        $config['database_dsn'],
        $config['database_user'],
        $config['database_pass']
    );

    return $pdo;
}