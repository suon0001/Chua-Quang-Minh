<?php
class SignupModel
{
    public $userInsert = "INSERT INTO Admin (email, password, phone) VALUES (:email, :password, :phone)";
}
$SignupModel = new SignupModel();