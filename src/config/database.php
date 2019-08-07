<?php

require_once __DIR__ . '/../../vendor/j4mie/idiorm/idiorm.php';


try {
    ORM::configure('error_mode', PDO::ERRMODE_EXCEPTION);
    ORM::configure("mysql:host=localhost;dbname=test");
    ORM::configure('username', 'root');
    ORM::configure('password', 'root');
    ORM::configure('return_result_sets', true);
    ORM::configure('id_column', array('id'));
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}