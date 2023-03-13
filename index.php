
<?php
require_once("database/conn.php");

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
