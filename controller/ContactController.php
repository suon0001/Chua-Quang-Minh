<?php


//send mail
if (isset($_POST['send_email'])) {

    $firstName   = $sanitized['firstName'];
    $lastName     = $sanitized['lastName'];
    $email     = $sanitized['email'];
    $mailSubject     = $sanitized['mailSubject'];
    $message     = $sanitized['message'];


    if (
        !empty($_POST['firstName']) || !empty($_POST['lastName']) || !empty($_POST['email'])
        || !empty($_POST['mailSubject'])|| !empty($_POST['message'])
    ) {

        try {
            $conn->beginTransaction();
            $mailSent = $conn->prepare($ContactModel->sentMail);
            $mailSent->bindParam(':firstName', $firstName, PDO::PARAM_STR);
            $mailSent->bindParam(':lastName', $lastName, PDO::PARAM_STR);
            $mailSent->bindParam(':email', $email, PDO::PARAM_STR);
            $mailSent->bindParam(':mailSubject', $mailSubject, PDO::PARAM_STR);
            $mailSent->bindParam(':message', $message, PDO::PARAM_STR);

            $mailSentResult = $mailSent->execute();
            $conn->commit();
              ?>

            <script>
                    window.location.href = "/contact";
            </script>
      
            <?php
            alert("message sent");


        } catch (Exception $err) {
            echo $err;
            $errorTransaction = true;
            $conn->rollback();
        }
    }
}

//display mail
$showAllMails = $conn->query($ContactModel->showMails);

//delete mail
if (isset($_REQUEST['del'])) {
    $setMail = $_REQUEST['mailID'];
    $handle = $conn->prepare($ContactModel->deleteMail);
    $handle->execute(array(":mailID" => $setMail));
      ?>

            <script>
                    window.location.href = "/admin-mail";
            </script>
      
            <?php
}
