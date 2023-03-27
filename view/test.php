<?php
require("rootPath.php");

require $rootPath . "model/TestModel.php";
require $rootPath . "controller/TestController.php";
?>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth',
            headerToolbar: {
                left: 'prev,next today',
                center: 'title',
                right: 'dayGridMonth,timeGridWeek,timeGridDay'
            }, events: [
                <?php  foreach ($allEventsResult as $row) {

                $title = $row['eventName'];
                $date = $row['date'];

                $today = date("Y-m-d", strtotime($row['date']));

                ?>

                {
                    title: '<?php echo $title ?>',
                    start: '<?php echo $today ?>'
                },
                <?php
                }
                ?>
            ]
        });
        calendar.render();
    });

</script>

<div id="calendar"></div>

