<?php

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $email = $sanitized['email'];
    $password = $sanitized['password'];

    if (!empty($email) && !empty($password)) {

        $handle = $conn->prepare($LoginModel->selectQuery);
        $handle->bindParam(':email', $email, PDO::PARAM_STR);
        $handle->execute();
        $result = $handle->fetchAll();

        if ($result && count($result) > 0) {
            $user = $result[0];

            if (password_verify($password, $user['password'])) {
                session_regenerate_id();
                $_SESSION['adminID'] = $user['adminID'];
                header("photo");
            }

        }
    }
}