<?php
$allEvents = $conn->query($AdminEventModel->eventList);
$newsOption = $conn->query($AdminEventModel->newsType);

if (isset($_POST['create'])) {

    $eventName = $sanitized['eventName'];
    $host = $sanitized['host'];
    $address = $sanitized['address'];
    $start_time = $sanitized['start_time'];
    $date_start = $sanitized['date_start'];
    $date_end  = $sanitized['date_end'];
    $pdf_file = $_FILES["pdf_file"]["name"];
    $newsTypeID = $sanitized['newsTypeID'];

    if (
        !empty($_POST['eventName']) || !empty($_POST['host']) ||
        !empty($_POST['address']) || !empty($_POST['start_time']) ||
        !empty($_POST['date_start']) || !empty($_POST['date_end']) || !empty($_POST['pdf_file']) || !empty($_POST['newsTypeID']))
     {

        $file = $_FILES["pdf_file"]["name"];
        $filename = strtolower($file);
        if ($_FILES['pdf_file']['name']) {
            move_uploaded_file(
                $_FILES['pdf_file']['tmp_name'],
                "assets/event/" . $filename
            );
        }

        try {
            $conn->beginTransaction();
            $addArticle = $conn->prepare($AdminEventModel->createEvent);
            $addArticle->bindParam(':eventName', $eventName, PDO::PARAM_STR);
            $addArticle->bindParam(':host', $host, PDO::PARAM_STR);
            $addArticle->bindParam(':address', $address, PDO::PARAM_STR);
            $addArticle->bindParam(':start_time', $start_time, PDO::PARAM_STR);
            $addArticle->bindParam(':date_start', $date_start, PDO::PARAM_STR);
            $addArticle->bindParam(':date_end', $date_end, PDO::PARAM_STR);
            $addArticle->bindParam(':pdf_file', $pdf_file, PDO::PARAM_STR);
            $addArticle->bindParam(':newsTypeID', $newsTypeID, PDO::PARAM_INT);

            $addArticleResult = $addArticle->execute();
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