<?php
class LoginModel
{
    public $loginIn = "SELECT * FROM Admin WHERE `email` = :email LIMIT 1";
}
$LoginModel = new LoginModel();