<?php
class SettingModel
{
    public $userInsert = "INSERT INTO Admin (email, password, phone) VALUES (:email, :password, :phone)";
<<<<<<< HEAD
    public $editProfile = "UPDATE Admin SET `email` = :email, `phone` = :phone , `address` = :address  WHERE `Admin`.`adminID` = 1";
=======
>>>>>>> parent of b918697 (save)
}
$SettingModel = new SettingModel();