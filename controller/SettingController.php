<?php

$errorEmail = false;
$signupSucess = false;
$error = false;



if (isset($_POST['CreateProfile'])) {

    $email = $sanitized['email'];
    $password = $sanitized['password'];
    $phone = $sanitized['phone'];


    if (!empty($email) && !empty($password) && !empty($phone)) {

        $conn->beginTransaction();

        $iterations = ['cost' => 6];
        $hashed_password = password_hash($password, PASSWORD_BCRYPT, $iterations);
        $handle = $conn->prepare($SettingModel->userInsert);
        $handle->bindParam(':email', $email, PDO::PARAM_STR);
        $handle->bindParam(':password', $hashed_password, PDO::PARAM_STR);
        $handle->bindParam(':phone', $phone, PDO::PARAM_INT);
        $userResult = $handle->execute();
        $conn->commit();
        $signupSucess = true;
    } else {
        $error = true;
        $conn->rollback();
    }
}