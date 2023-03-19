<?php
class SettingModel
{
    public $userInsert = "INSERT INTO Admin (email, password, phone) VALUES (:email, :password, :phone)";
}
$SettingModel = new SettingModel();