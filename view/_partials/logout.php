<?php
$_SESSION = array();

if (isset($_COOKIE[session_name()])) {
    setcookie(session_name(), '', time() - 40000, '/');
}
session_unset();

header("Location:home.php");