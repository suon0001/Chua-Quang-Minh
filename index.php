<?php

require_once("database/conn.php");
if (!isset($_SESSION)) {
    session_start();

}

// sanitaze
function sanitize($input)
{
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);
    $input = nl2br($input);

    return $input;
}

// Here we sanitize all the incoming data
$sanitized = array_map('sanitize', $_POST);


include("view/_partials/links.php");

include("view/_partials/header.php");
?>

<div class="main mx-5">
    <br>
    <?php
    require("router.php");
    ?>

</div>

<?php

include("view/_partials/footer.php");

?>

