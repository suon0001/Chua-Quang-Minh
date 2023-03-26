<?php
$allEvents = $conn->query($AdminEventModel->eventList);

if (isset($_POST['create'])) {

    $eventName = $sanitized['eventName'];
    $host = $sanitized['host'];
    $address = $sanitized['address'];
    $description = trim($_POST['description']);
    $start = $sanitized['start'];
    $end = $sanitized['end'];
    $date = $sanitized['date'];

    if (
        !empty($_POST['eventName']) || !empty($_POST['host']) ||
        !empty($_POST['address']) || !empty($_POST['description']) ||
        !empty($_POST['start']) || !empty($_POST['end']) || !empty($_POST['date'])
    ) {

        try {
            $conn->beginTransaction();
            $addEvent = $conn->prepare($AdminEventModel->createEvent);
            $addEvent->bindParam(':eventName', $eventName, PDO::PARAM_STR);
            $addEvent->bindParam(':host', $host, PDO::PARAM_STR);
            $addEvent->bindParam(':address', $description, PDO::PARAM_STR);
            $addEvent->bindParam(':description', $description, PDO::PARAM_STR);
            $addEvent->bindParam(':start', $start, PDO::PARAM_STR);
            $addEvent->bindParam(':end', $end, PDO::PARAM_STR);
            $addEvent->bindParam(':date', $date, PDO::PARAM_STR);

            $addEventResult = $addEvent->execute();
            $conn->commit();
            header("Location:admin-event");
        } catch (Exception $err) {
            echo $err;
            $errorTransaction = true;
            $conn->rollback();
        }
    }
}