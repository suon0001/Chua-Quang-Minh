<?php
$errorPassword = false;
$notregistered = false;
$wrongCredentials = false;

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $email = $sanitized['email'];
    $password = $sanitized['password'];

    if (!empty($email) && !empty($password)) {

        $handle = $conn->prepare($LoginModel->loginIn);
        $handle->bindParam(':email', $email, PDO::PARAM_STR);
        $handle->execute();
        $result = $handle->fetchAll();


        if ($result && count($result) > 0) {
            $user = $result[0];

            if (password_verify($password, $user['password'])) {
                session_regenerate_id();
                $_SESSION['adminID'] = $user['adminID'];
                ?>

                <script>
                    window.location.href = "/admin-profile";
                </script>
                <?php
                exit();
            } else {
                $errorPassword = true;
            }
        } else {
            $notregistered = true;
        }
    } else {
        $wrongCredentials = true;
    }
}
