<?php
require("constants.php");
try {
    $conn = new PDO(DSN, DB_USER, DB_PASS);
} catch (PDOException $err) {
    echo 'Connection failed:' . $err->getMessage();
}