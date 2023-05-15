<?php
class SettingModel
{
    public $selectUser = "SELECT * FROM Admin";
    public $userInsert = "INSERT INTO Admin (email, password, phone) VALUES (:email, :password, :phone)";
    public $editProfile = "UPDATE Admin SET `email` = :email,`phone` = :phone  WHERE `Admin`.`adminID` = 1";
}
$SettingModel = new SettingModel();