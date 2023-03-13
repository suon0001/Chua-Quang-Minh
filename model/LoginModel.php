<?php
class LoginModel
{
    public $selectQuery = "SELECT * FROM Admin WHERE `email` = :email LIMIT 1";
}
$LoginModel = new LoginModel();