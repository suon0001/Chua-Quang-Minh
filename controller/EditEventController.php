<?php

$allEvent = $conn->query($getEvent);

if (isset($_POST['edit'])) {

    $eventName = $sanitized['eventName'];
    $host = $sanitized['host'];
    $address = $sanitized['address'];
    $description = trim($_POST['description']);
    $start = $sanitized['start'];
    $end = $sanitized['end'];
    $date = $sanitized['date'];
    $eventID = $sanitized['eventID'];

    if (
        !empty($_POST['eventName']) || !empty($_POST['host']) ||
        !empty($_POST['address']) || !empty($_POST['description']) ||
        !empty($_POST['start']) || !empty($_POST['end']) || !empty($_POST['date'])
    ) {

        try {
            $conn->beginTransaction();
            $editEvent = $conn->prepare($EditEventModel->editEvent);
            $editEvent->bindParam(':eventID', $eventID, PDO::PARAM_INT);
            $editEvent->bindParam(':eventName', $eventName, PDO::PARAM_STR);
            $editEvent->bindParam(':host', $host, PDO::PARAM_STR);
            $editEvent->bindParam(':address', $description, PDO::PARAM_STR);
            $editEvent->bindParam(':description', $description, PDO::PARAM_STR);
            $editEvent->bindParam(':start', $start, PDO::PARAM_STR);
            $editEvent->bindParam(':end', $end, PDO::PARAM_STR);
            $editEvent->bindParam(':date', $date, PDO::PARAM_STR);

            $editEventResult = $editEvent->execute();
            $conn->commit();
             ?>

            <script>
                    window.location.href = "/admin-event";
            </script>
      
            <?php
        } catch (Exception $err) {
            echo $err;
            $errorTransaction = true;
            $conn->rollback();
        }
    }
}